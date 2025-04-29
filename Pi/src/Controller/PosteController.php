<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Poste;
use App\Entity\Comment;
use App\Form\PosteType;
use App\Repository\PosteRepository;
use App\Repository\LikeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use GuzzleHttp\Client;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;


#[Route('/poste')]
final class PosteController extends AbstractController
{
    #[Route(name: 'app_poste_index', methods: ['GET'])]
    public function index(Request $request , PosteRepository $posteRepository, LikeRepository $likeRepository, SessionInterface $session, EntityManagerInterface $entityManager,PaginatorInterface $paginator   ): Response
    {
        $userId = $session->get('id');
        $user = $userId ? $entityManager->getRepository(User::class)->find($userId) : null;

        $all_postes = $posteRepository->findAll();

            // Paginate the query
    $postes = $paginator->paginate(
        $all_postes,
        $request->query->getInt('page', 1), // Current page number
        3 // Items per page
    );

        $likedPostes = [];
        $filteredPostes = array_filter($postes->getItems(), function ($poste) use ($user) {
            return $user === null || $poste->getUser() !== $user;
        });


        if ($user) {
            foreach ($filteredPostes as $poste) {
                foreach ($poste->getLikes() as $like) {
                    if ($like->getUser() === $user) {
                        $likedPostes[] = $poste->getId();
                        break;
                    }
                }
            }
        }

        return $this->render('poste/index.html.twig', [
            'postes' => $postes,
            'filteredPostes' => $filteredPostes,
            'likedPostes' => $likedPostes,
            'user' => $user,
        ]);
    }

    #[Route('/mypost', name: 'app_poste_my_posts', methods: ['GET'])]
    public function myPosts(PosteRepository $posteRepository, SessionInterface $session, EntityManagerInterface $entityManager): Response
    {
        $userId = $session->get('id');
        if (!$userId) {
            return $this->redirectToRoute('login');
        }

        $user = $entityManager->getRepository(User::class)->find($userId);
        if (!$user) {
            $session->invalidate();
            return $this->redirectToRoute('login');
        }

        $myPostes = $posteRepository->findBy(['user' => $user]);
        $likedPostes = [];

        foreach ($myPostes as $poste) {
            foreach ($poste->getLikes() as $like) {
                if ($like->getUser() === $user) {
                    $likedPostes[] = $poste->getId();
                    break;
                }
            }
        }

        return $this->render('poste/index1.html.twig', [
            'postes' => $myPostes,
            'likedPostes' => $likedPostes,
            'user' => $user,
        ]);
    }

    #[Route('/report/{id}', name: 'poste_report', methods: ['POST'])]
    public function reportPost(int $id, EntityManagerInterface $entityManager, SessionInterface $session): JsonResponse
    {
        $userId = $session->get('id');
        if (!$userId) {
            return new JsonResponse(['success' => false, 'message' => 'Utilisateur non authentifié'], 403);
        }

        $user = $entityManager->getRepository(User::class)->find($userId);
        if (!$user) {
            $session->invalidate();
            return new JsonResponse(['success' => false, 'message' => 'Utilisateur non trouvé'], 403);
        }

        $poste = $entityManager->getRepository(Poste::class)->find($id);
        if (!$poste) {
            return new JsonResponse(['success' => false, 'message' => 'Poste non trouvé'], 404);
        }

        $poste->setSignaled(true);
        $entityManager->persist($poste);
        $entityManager->flush();

        return new JsonResponse(['success' => true, 'message' => 'Poste signalé avec succès']);
    }

    #[Route('/comment/add/{id}', name: 'add_comment', methods: ['POST'])]
    public function addComment(Request $request, Poste $poste, EntityManagerInterface $entityManager, SessionInterface $session): JsonResponse
    {
        $userId = $session->get('id');
        if (!$userId) {
            return new JsonResponse(['error' => 'Utilisateur non authentifié'], 403);
        }

        $user = $entityManager->getRepository(User::class)->find($userId);
        if (!$user) {
            $session->invalidate();
            return new JsonResponse(['error' => 'Utilisateur non trouvé'], 403);
        }

        $data = json_decode($request->getContent(), true);
        if (!$data || !isset($data['content']) || empty(trim($data['content']))) {
            return new JsonResponse(['error' => 'Comment content cannot be empty'], 400);
        }

        $comment = new Comment();
        $comment->setPoste($poste);
        $comment->setUser($user);
        $comment->setContenu($data['content']);
        $comment->setCreatedAt(new \DateTime());

        $entityManager->persist($comment);
        $entityManager->flush();

        $firstName = $user->getPrenom() ?: 'Anonymous';
        $lastName = $user->getNom() ?: 'User';
        $profilePicture = $user->getImageUrl();

        return new JsonResponse([
            'success' => true,
            'comment' => [
                'id' => $comment->getId(),
                'content' => $comment->getContenu(),
                'user' => [
                    'id' => $user->getId(),
                    'firstName' => $firstName,
                    'lastName' => $lastName,
                    'profilePicture' => $profilePicture,
                ],
            ],
        ]);
    }

    // Dans PosteController.php
    #[Route('/new', name: 'app_poste_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager,
        SluggerInterface $slugger,
        SessionInterface $session
    ): Response {
        $userId = $session->get('id');
        if (!$userId) {
            return $this->redirectToRoute('login');
        }

        $user = $entityManager->getRepository(User::class)->find($userId);
        if (!$user) {
            $session->invalidate();
            return $this->redirectToRoute('login');
        }

        $poste = new Poste();
        $poste->setUser($user); // ⚠️ Ajoutez cette ligne cruciale

        $form = $this->createForm(PosteType::class, $poste);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Gestion de l'image
            $imageFile = $form->get('imageFile')->getData();
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('upload_directory'),
                        $newFilename
                    );
                    $poste->setImage($newFilename);
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Error while uploading image');
                }
            }

            $entityManager->persist($poste);
            $entityManager->flush();

            $this->addFlash('success', 'Post created successfully!');
            return $this->redirectToRoute('app_poste_my_posts');
        }

        return $this->render('poste/new.html.twig', [
            'poste' => $poste,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_poste_show', methods: ['GET'])]
    public function show(Poste $poste): Response
    {
        return $this->render('poste/show.html.twig', [
            'poste' => $poste,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_poste_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request,
        Poste $poste,
        EntityManagerInterface $entityManager,
        SessionInterface $session,
        SluggerInterface $slugger
    ): Response {
        $userId = $session->get('id');
        if (!$userId) {
            return $this->redirectToRoute('login');
        }

        $user = $entityManager->getRepository(User::class)->find($userId);
        if (!$user || $poste->getUser() !== $user) {
            return $this->redirectToRoute('app_poste_index');
        }

        $form = $this->createForm(PosteType::class, $poste);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                // Gestion de l'image
                $imageFile = $form->get('imageFile')->getData();
                if ($imageFile) {
                    $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                    $safeFilename = $slugger->slug($originalFilename);
                    $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                    try {
                        // Supprimer l'ancienne image si elle existe
                        if ($poste->getImage()) {
                            $oldImagePath = $this->getParameter('upload_directory').'/'.$poste->getImage();
                            if (file_exists($oldImagePath)) {
                                unlink($oldImagePath);
                            }
                        }

                        // Déplacer la nouvelle image
                        $imageFile->move(
                            $this->getParameter('upload_directory'),
                            $newFilename
                        );
                        $poste->setImage($newFilename);
                    } catch (\Exception $e) {
                        $this->addFlash('error', 'Error while uploading image: '.$e->getMessage());
                        return $this->redirectToRoute('app_poste_edit', ['id' => $poste->getId()]);
                    }
                }

                // Mise à jour des catégories
                $selectedCategories = $form->get('categories')->getData();
                $poste->setCategories($selectedCategories);

                // Sauvegarde
                $entityManager->flush();

                $this->addFlash('success', 'Post updated successfully!');
                return $this->redirectToRoute('app_poste_my_posts', [], Response::HTTP_SEE_OTHER);
            } else {
                $this->addFlash('error', 'Please correct the errors in the form.');
            }
        }

        return $this->render('poste/edit.html.twig', [
            'poste' => $poste,
            'form' => $form->createView(),
        ]);
    }
    #[Route('/{id}', name: 'app_poste_delete', methods: ['POST'])]
    public function delete(Request $request, Poste $poste, EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        $userId = $session->get('id');
        if (!$userId) {
            return $this->redirectToRoute('login');
        }

        $user = $entityManager->getRepository(User::class)->find($userId);
        if (!$user || $poste->getUser() !== $user) {
            return $this->redirectToRoute('app_poste_index');
        }

        if ($this->isCsrfTokenValid('delete'.$poste->getId(), $request->getPayload()->getString('_token'))) {
            if ($poste->getImage()) {
                $imagePath = $this->getParameter('upload_directory').'/'.$poste->getImage();
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $entityManager->remove($poste);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_poste_my_posts', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/comment/edit/{id}', name: 'edit_comment', methods: ['POST'])]
    public function editComment(Request $request, Comment $comment, EntityManagerInterface $entityManager, SessionInterface $session): JsonResponse
    {
        $userId = $session->get('id');
        if (!$userId) {
            return new JsonResponse(['error' => 'Utilisateur non authentifié'], 403);
        }

        $user = $entityManager->getRepository(User::class)->find($userId);
        if (!$user || $comment->getUser() !== $user) {
            return new JsonResponse(['error' => 'You are not authorized to edit this comment.'], 403);
        }

        $data = json_decode($request->getContent(), true);
        if (!$data || !isset($data['content']) || empty(trim($data['content']))) {
            return new JsonResponse(['error' => 'Comment content cannot be empty'], 400);
        }

        $comment->setContenu($data['content']);
        $entityManager->flush();

        return new JsonResponse([
            'success' => true,
            'comment' => [
                'id' => $comment->getId(),
                'content' => $comment->getContenu(),
                'createdAt' => $comment->getCreatedAt()->format('Y-m-d H:i'),
            ],
        ]);
    }

    #[Route('/comment/delete/{id}', name: 'delete_comment', methods: ['POST'])]
    public function deleteComment(Comment $comment, EntityManagerInterface $entityManager, SessionInterface $session): JsonResponse
    {
        $userId = $session->get('id');
        if (!$userId) {
            return new JsonResponse(['error' => 'Utilisateur non authentifié'], 403);
        }

        $user = $entityManager->getRepository(User::class)->find($userId);
        if (!$user || $comment->getUser() !== $user) {
            return new JsonResponse(['error' => 'You are not authorized to delete this comment.'], 403);
        }

        $entityManager->remove($comment);
        $entityManager->flush();

        return new JsonResponse(['success' => true]);
    }

    #[Route('/comments/{id}', name: 'get_comments', methods: ['GET'])]
    public function getComments(Poste $poste, SessionInterface $session, EntityManagerInterface $entityManager): JsonResponse
    {
        $userId = $session->get('id');
        $user = $userId ? $entityManager->getRepository(User::class)->find($userId) : null;

        $comments = [];
        foreach ($poste->getComments() as $comment) {
            $commentUser = $comment->getUser();
            $firstName = $commentUser->getPrenom() ?: 'Anonymous';
            $lastName = $commentUser->getNom() ?: 'User';
            $profilePicture = $commentUser->getImageUrl();

            $comments[] = [
                'id' => $comment->getId(),
                'content' => $comment->getContenu(),
                'createdAt' => $comment->getCreatedAt()->format('Y-m-d H:i:s'),
                'user' => [
                    'id' => $commentUser->getId(),
                    'firstName' => $firstName,
                    'lastName' => $lastName,
                    'profilePicture' => $profilePicture ?: null,
                ],
            ];
        }

        return $this->json(['comments' => $comments]);
    }

    #[Route('/comment/check-toxicity', name: 'check_comment_toxicity', methods: ['POST'])]
    public function checkCommentToxicity(Request $request, HttpClientInterface $httpClient, LoggerInterface $logger): JsonResponse
    {
        // 1. Validate request content
        $data = json_decode($request->getContent(), true);
        if (!isset($data['content'])) {
            $logger->error('Missing content field in request', ['request_data' => $data]);
            return new JsonResponse(['error' => 'invalid_request', 'message' => 'Le champ "content" est requis'], 400);
        }

        $commentText = substr(trim($data['content']), 0, 512);
        if (empty($commentText)) {
            $logger->warning('Empty comment content received');
            return new JsonResponse(['error' => 'empty_content', 'message' => 'Le commentaire ne peut pas être vide'], 400);
        }

        // 2. Verify API key
        $apiKey = $this->getParameter('huggingface_api_key');
        if (empty($apiKey)) {
            $logger->critical('Hugging Face API key not configured in parameters');
            return new JsonResponse(['error' => 'api_configuration', 'message' => 'Configuration API manquante'], 500);
        }

        // 3. Model configuration with fallback
        $models = [
            'primary' => 'facebook/roberta-hate-speech-dynabench-r4-target',
            'fallback' => 'IMSyPP/hate_speech_en'
        ];
        $toxicityThreshold = 0.75;
        $headers = [
            'Authorization' => 'Bearer ' . $apiKey,
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'
        ];

        // 4. Try primary and fallback models
        foreach (['primary', 'fallback'] as $modelKey) {
            $currentModel = $models[$modelKey];
            $apiUrl = "https://api-inference.huggingface.co/models/{$currentModel}";

            try {
                $logger->info('Attempting toxicity check', [
                    'model' => $currentModel,
                    'comment_length' => strlen($commentText),
                    'first_50_chars' => substr($commentText, 0, 50)
                ]);

                $response = $httpClient->request('POST', $apiUrl, [
                    'headers' => $headers,
                    'json' => ['inputs' => $commentText],
                    'timeout' => 30,
                ]);

                $statusCode = $response->getStatusCode();
                $fullResponse = $response->getContent(false);
                $responseData = json_decode($fullResponse, true);

                $logger->debug('API response details', [
                    'status_code' => $statusCode,
                    'headers' => $response->getHeaders(),
                    'body' => $fullResponse
                ]);

                // 5. Handle status codes
                switch ($statusCode) {
                    case 200:
                        break; // Proceed to parsing
                    case 401:
                        $logger->error('API key rejected', ['response' => $responseData]);
                        return new JsonResponse(['error' => 'invalid_api_key', 'message' => 'Clé API non autorisée'], 500);
                    case 429:
                        $logger->warning('API rate limit exceeded', ['response' => $responseData]);
                        return new JsonResponse(['error' => 'rate_limit', 'message' => 'Limite de requêtes dépassée, réessayez plus tard'], 429);
                    case 503:
                        $logger->warning('Model loading', ['response' => $responseData]);
                        if ($modelKey === 'fallback') {
                            return new JsonResponse([
                                'error' => 'model_loading',
                                'message' => 'Les modèles sont en cours de chargement',
                                'estimated_time' => $responseData['estimated_time'] ?? null
                            ], 503);
                        }
                        break; // Try fallback model
                    default:
                        $logger->error('Unexpected API response', ['status' => $statusCode, 'response' => $responseData]);
                        return new JsonResponse([
                            'error' => 'api_error',
                            'message' => 'Réponse inattendue du service de modération',
                            'status_code' => $statusCode
                        ], 500);
                }

                // 6. Parse response safely
                if ($responseData === null || !is_array($responseData)) {
                    $logger->error('Invalid or non-JSON API response', ['response' => $fullResponse]);
                    return new JsonResponse(['error' => 'invalid_response', 'message' => 'Réponse API non valide'], 500);
                }

                $toxicityScore = 0;
                $isToxic = false;
                $detectedLabel = null;

                // Handle various response formats
                $dataToParse = $responseData;
                if (isset($responseData[0]) && is_array($responseData[0])) {
                    $dataToParse = $responseData[0];
                }

                foreach ($dataToParse as $item) {
                    if (is_array($item) && isset($item['label'], $item['score'])) {
                        $label = strtolower($item['label']);
                        if ($label === 'hate' || $label === 'toxic' || $label === 'positive' || str_contains($label, 'hate')) {
                            $toxicityScore = (float)$item['score'];
                            $isToxic = ($label === 'hate' || $label === 'toxic' || str_contains($label, 'hate')) && $toxicityScore >= $toxicityThreshold;
                            $detectedLabel = $item['label'];
                            break;
                        }
                    }
                }

                if ($detectedLabel === null) {
                    $logger->warning('No valid toxicity labels found in response', ['response' => $responseData]);
                }

                $logger->info('Toxicity check result', [
                    'is_toxic' => $isToxic,
                    'score' => $toxicityScore,
                    'threshold' => $toxicityThreshold,
                    'detected_label' => $detectedLabel
                ]);

                return new JsonResponse([
                    'isToxic' => $isToxic,
                    'score' => $toxicityScore,
                    'threshold' => $toxicityThreshold,
                    'label' => $detectedLabel,
                    'model' => $currentModel
                ]);

            } catch (TransportExceptionInterface $e) {
                $logger->critical('API transport failure', [
                    'error' => $e->getMessage(),
                    'trace' => $e->getTraceAsString(),
                    'model' => $currentModel
                ]);
                if ($modelKey === 'fallback') {
                    return new JsonResponse([
                        'error' => 'network_error',
                        'message' => 'Impossible de se connecter au service de modération',
                        'debug' => ['exception' => $e->getMessage()]
                    ], 503);
                }
                continue; // Try fallback model
            } catch (\Exception $e) {
                $logger->emergency('Unexpected toxicity check failure', [
                    'error' => $e->getMessage(),
                    'trace' => $e->getTraceAsString(),
                    'model' => $currentModel
                ]);
                return new JsonResponse([
                    'error' => 'processing_error',
                    'message' => 'Erreur lors de l\'analyse du commentaire',
                    'debug' => ['exception' => $e->getMessage()]
                ], 500);
            }
        }

        // Fallback failed
        return new JsonResponse([
            'error' => 'service_unavailable',
            'message' => 'Service de modération indisponible'
        ], 503);
    }
    #[Route('/comment/report/{id}', name: 'comment_report', methods: ['POST'])]
    public function reportComment(int $id, EntityManagerInterface $entityManager, SessionInterface $session): JsonResponse
    {
        $userId = $session->get('id');
        if (!$userId) {
            return new JsonResponse(['success' => false, 'message' => 'Utilisateur non authentifié'], 403);
        }

        $user = $entityManager->getRepository(User::class)->find($userId);
        if (!$user) {
            $session->invalidate();
            return new JsonResponse(['success' => false, 'message' => 'Utilisateur non trouvé'], 403);
        }

        $comment = $entityManager->getRepository(Comment::class)->find($id);
        if (!$comment) {
            return new JsonResponse(['success' => false, 'message' => 'Commentaire non trouvé'], 404);
        }

        $comment->setSignaled(true);
        $entityManager->persist($comment);
        $entityManager->flush();

        return new JsonResponse(['success' => true, 'message' => 'Commentaire signalé avec succès']);
    }
}