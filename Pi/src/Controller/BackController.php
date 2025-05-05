<?php

namespace App\Controller;
use App\Entity\User;
use App\Entity\Comment; // Ajout de l'entité Comment
use App\Entity\Message;
use App\Entity\Poste;
use App\Repository\CommentRepository; // Ajout du repository Comment
use App\Repository\MessageRepository;
use App\Repository\PosteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\HttpFoundation\Session\SessionInterface; 

#[Route('/admindashboard')]
class BackController extends AbstractController
{
    // Gestion des postes signalés
    #[Route('/postes', name: 'admindashboard_postes', methods: ['GET'])]
    public function reportedPostes(PosteRepository $posteRepository,SessionInterface $session, 
    EntityManagerInterface $entityManager, ): Response
    {
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }
    
        $userId = $session->get('id');
        $user = $entityManager->getRepository(User::class)->find($userId);
        $postes = $posteRepository->findBy(['signaled' => true]);
        return $this->render('back/postes.html.twig', [
            'postes' => $postes,'user' => $user,
        ]);
    }

    #[Route('/postes/unreport/{id}', name: 'admin_unreport_poste', methods: ['GET'])]
    public function unreportPoste(PosteRepository $posteRepository,
     EntityManagerInterface $entityManager,
     SessionInterface $session, 
      int $id): RedirectResponse
    {
        $poste = $posteRepository->find($id);
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }
    
        $userIdd = $session->get('id');
        $userS = $entityManager->getRepository(User::class)->find($userIdd);
        if (!$poste) {
            $this->addFlash('error', 'Poste not found.');
        } else {
            $poste->setSignaled(false);
            $entityManager->flush();
            $this->addFlash('success', 'Poste unreported successfully.');
        }

        return $this->redirectToRoute('admindashboard_postes', [
         'user' => $userS,
        ]);
    }

    #[Route('/postes/delete/{id}', name: 'admindashboard_delete_poste', methods: ['POST'])]
    public function deletePoste(Poste $poste, EntityManagerInterface $entityManager): RedirectResponse
    {
        $entityManager->remove($poste);
        $entityManager->flush();

        $this->addFlash('success', 'Poste deleted successfully.');
        return $this->redirectToRoute('admindashboard_postes');
    }

    // Gestion des commentaires signalés
    #[Route('/comments', name: 'admindashboard_comments', methods: ['GET'])]
    public function reportedComments(CommentRepository $commentRepository,SessionInterface $session, 
    EntityManagerInterface $entityManager, ): Response
    {
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }
    
        $userId = $session->get('id');
        $user = $entityManager->getRepository(User::class)->find($userId);
        $comments = $commentRepository->findBy(['signaled' => true]);
        return $this->render('back/comments.html.twig', [
            'comments' => $comments,'user' => $user,
        ]);
    }

    #[Route('/comments/unreport/{id}', name: 'admin_unreport_comment', methods: ['GET'])]
    public function unreportComment(CommentRepository $commentRepository, 
    EntityManagerInterface $entityManager,
    SessionInterface $session, 
      int $id): RedirectResponse
    {

        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }
    
        $userId = $session->get('id');
        $user = $entityManager->getRepository(User::class)->find($userId);
        $comment = $commentRepository->find($id);

        if (!$comment) {
            $this->addFlash('error', 'Commentaire non trouvé.');
        } else {
            $comment->setSignaled(false);
            $entityManager->flush();
            $this->addFlash('success', 'Commentaire désignalé avec succès.');
        }

        return $this->redirectToRoute('admindashboard_comments', [
          'user' => $user,
        ]);
    }

    #[Route('/comments/delete/{id}', name: 'admindashboard_delete_comment', methods: ['POST'])]
    public function deleteComment(Comment $comment, EntityManagerInterface $entityManager): RedirectResponse
    {
        $entityManager->remove($comment);
        $entityManager->flush();

        $this->addFlash('success', 'Commentaire supprimé avec succès.');
        return $this->redirectToRoute('admindashboard_comments');
    }
}