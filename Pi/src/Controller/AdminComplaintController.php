<?php

namespace App\Controller;

use App\Entity\Complaint;
use App\Form\AdminComplaintType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/complaint')]  // This prefix is important!
class AdminComplaintController extends AbstractController
{
    #[Route('/{id}/edit-status', name: 'admin_complaint_edit_status', methods: ['GET', 'POST'])]
    public function editStatus(Request $request, Complaint $complaint, EntityManagerInterface $entityManager): Response
    {

        $form = $this->createForm(AdminComplaintType::class, $complaint);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $complaint->setRespondedBy($this->getUser());
            $entityManager->flush();

            $this->addFlash('success', 'Statut de la réclamation mis à jour !');
            return $this->redirectToRoute('app_complaint_index'); // Redirection corrigée
        }

        return $this->render('complaint/admin_edit_status.html.twig', [
            'complaint' => $complaint,
            'form' => $form->createView(),
        ]);
    }
}