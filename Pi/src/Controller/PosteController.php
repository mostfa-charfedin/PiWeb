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
        4 // Items per page
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
        $data = json_decode($request->getContent(), true);
        $commentText = substr(trim($data['content'] ?? ''), 0, 1000); // Limite à 1000 caractères

        if (empty($commentText)) {
            $logger->warning('Empty comment content received');
            return new JsonResponse(['error' => 'Comment content is empty'], 400);
        }

        $apiKey = $this->getParameter('huggingface_api_key');
        if (empty($apiKey)) {
            $logger->error('Hugging Face API key not configured');
            return new JsonResponse(['error' => 'API configuration error'], 500);
        }

        $apiUrl = 'https://api-inference.huggingface.co/models/unitary/toxic-bert';
        $toxicityThreshold = 0.8;

        try {
            $response = $httpClient->request('POST', $apiUrl, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $apiKey,
                    'Content-Type' => 'application/json',
                ],
                'json' => ['inputs' => $commentText],
                'timeout' => 20, // Augmentez le timeout
            ]);

            $statusCode = $response->getStatusCode();
            $content = $response->getContent(false);

            if ($statusCode !== 200) {
                $logger->error('Hugging Face API error', [
                    'status' => $statusCode,
                    'response' => $content,
                    'comment' => $commentText
                ]);
                return new JsonResponse([
                    'error' => 'API error',
                    'status' => $statusCode,
                    'details' => json_decode($content, true) ?: $content
                ], 500);
            }

            $result = json_decode($content, true);

            // Analyse de la réponse
            $toxicityScore = 0.0;
            $isToxic = false;

            if (is_array($result) && isset($result[0])) {
                foreach ($result[0] as $item) {
                    if (isset($item['label'], $item['score']) && $item['label'] === 'toxic') {
                        $toxicityScore = (float)$item['score'];
                        $isToxic = $toxicityScore >= $toxicityThreshold;
                        break;
                    }
                }
            }

            return new JsonResponse([
                'isToxic' => $isToxic,
                'score' => $toxicityScore,
                'threshold' => $toxicityThreshold
            ]);

        } catch (TransportExceptionInterface $e) {
            $logger->error('API transport error', ['error' => $e->getMessage()]);
            return new JsonResponse([
                'error' => 'API unavailable',
                'message' => 'Could not reach toxicity check service'
            ], 503);
        } catch (\Exception $e) {
            $logger->error('Unexpected error', ['error' => $e->getMessage()]);
            return new JsonResponse([
                'error' => 'Internal server error',
                'message' => 'An unexpected error occurred'
            ], 500);
        }
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