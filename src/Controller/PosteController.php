<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Poste;
use App\Entity\Comment;
use App\Form\PosteType;
use App\Repository\PosteRepository;
use App\Repository\LikeRepository;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/poste')]
final class PosteController extends AbstractController
{
    #[Route(name: 'app_poste_index', methods: ['GET'])]
    public function index(PosteRepository $posteRepository, LikeRepository $likeRepository, SessionInterface $session, EntityManagerInterface $entityManager): Response
    {
        $userId = $session->get('id');
        $user = $userId ? $entityManager->getRepository(User::class)->find($userId) : null;

        $postes = $posteRepository->findAll();
        $likedPostes = [];
        $filteredPostes = array_filter($postes, function ($poste) use ($user) {
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
            'postes' => $filteredPostes,
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

    #[Route('/new', name: 'app_poste_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager,
        SluggerInterface $slugger,
        CategoryRepository $categoryRepository,
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
        $form = $this->createForm(PosteType::class, $poste);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
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
                        $this->addFlash('error', 'Erreur lors de l\'upload de l\'image : ' . $e->getMessage());
                        return $this->render('poste/new.html.twig', [
                            'poste' => $poste,
                            'form' => $form->createView(),
                            'categories' => $categoryRepository->findAll(),
                        ]);
                    }
                }

                $selectedCategories = $form->get('categories')->getData();
                foreach ($selectedCategories as $category) {
                    $poste->addCategory($category);
                }

                $poste->setUser($user);
                $entityManager->persist($poste);
                $entityManager->flush();

                return $this->redirectToRoute('app_poste_my_posts', [], Response::HTTP_SEE_OTHER);
            } else {
                $this->addFlash('error', 'Formulaire invalide. Vérifiez les champs.');
            }
        }

        return $this->render('poste/new.html.twig', [
            'poste' => $poste,
            'form' => $form->createView(),
            'categories' => $categoryRepository->findAll(),
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
        CategoryRepository $categoryRepository,
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

        if ($form->isSubmitted() && $form->isValid()) {
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
                    if ($poste->getImage()) {
                        $oldImagePath = $this->getParameter('upload_directory').'/'.$poste->getImage();
                        if (file_exists($oldImagePath)) {
                            unlink($oldImagePath);


                        }
                    }
                    $poste->setImage($newFilename);
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Erreur lors de l\'upload de l\'image');
                }
            }

            $entityManager->flush();
            return $this->redirectToRoute('app_poste_my_posts', [], Response::HTTP_SEE_OTHER);
        }

        $selectedCategories = $poste->getCategories();

        return $this->render('poste/edit.html.twig', [
            'poste' => $poste,
            'form' => $form->createView(),
            'selectedCategories' => $selectedCategories,
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
}