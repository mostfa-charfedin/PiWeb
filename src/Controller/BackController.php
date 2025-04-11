<?php

namespace App\Controller;

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

#[Route('/admindashboard')]
class BackController extends AbstractController
{
    // Gestion des postes signalés
    #[Route('/postes', name: 'admindashboard_postes', methods: ['GET'])]
    public function reportedPostes(PosteRepository $posteRepository): Response
    {
        $postes = $posteRepository->findBy(['signaled' => true]);
        return $this->render('back/postes.html.twig', [
            'postes' => $postes,
        ]);
    }

    #[Route('/postes/unreport/{id}', name: 'admin_unreport_poste', methods: ['GET'])]
    public function unreportPoste(PosteRepository $posteRepository, EntityManagerInterface $entityManager, int $id): RedirectResponse
    {
        $poste = $posteRepository->find($id);

        if (!$poste) {
            $this->addFlash('error', 'Poste not found.');
        } else {
            $poste->setSignaled(false);
            $entityManager->flush();
            $this->addFlash('success', 'Poste unreported successfully.');
        }

        return $this->redirectToRoute('admindashboard_postes');
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
    public function reportedComments(CommentRepository $commentRepository): Response
    {
        $comments = $commentRepository->findBy(['signaled' => true]);
        return $this->render('back/comments.html.twig', [
            'comments' => $comments,
        ]);
    }

    #[Route('/comments/unreport/{id}', name: 'admin_unreport_comment', methods: ['GET'])]
    public function unreportComment(CommentRepository $commentRepository, EntityManagerInterface $entityManager, int $id): RedirectResponse
    {
        $comment = $commentRepository->find($id);

        if (!$comment) {
            $this->addFlash('error', 'Commentaire non trouvé.');
        } else {
            $comment->setSignaled(false);
            $entityManager->flush();
            $this->addFlash('success', 'Commentaire désignalé avec succès.');
        }

        return $this->redirectToRoute('admindashboard_comments');
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