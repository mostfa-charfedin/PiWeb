<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Complaint;
use App\Form\ComplaintType;
use App\Repository\ComplaintRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/complaint')]
final class ComplaintController extends AbstractController
{
    #[Route(name: 'app_complaint_index', methods: ['GET'])]
    public function index(ComplaintRepository $complaintRepository, SessionInterface $session, EntityManagerInterface $entityManager): Response
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

        // For regular users, show only their complaints

            $complaints = $complaintRepository->findBy(['user' => $user], ['createdAt' => 'DESC']);

            // For admins, show all complaints
            $complaints = $complaintRepository->findBy([], ['createdAt' => 'DESC']);


        return $this->render('complaint/index.html.twig', [
            'complaints' => $complaints,
            'user' => $user,
        ]);
    }

    #[Route('/mycomplaints', name: 'app_complaint_my_complaints', methods: ['GET'])]
    public function myComplaints(ComplaintRepository $complaintRepository, SessionInterface $session, EntityManagerInterface $entityManager): Response
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

        $myComplaints = $complaintRepository->findBy(['user' => $user], ['createdAt' => 'DESC']);

        return $this->render('complaint/my_complaints.html.twig', [
            'complaints' => $myComplaints,
            'user' => $user,
        ]);
    }

    #[Route('/new', name: 'app_complaint_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SessionInterface $session): Response
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

        $complaint = new Complaint();
        $form = $this->createForm(ComplaintType::class, $complaint);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $complaint->setUser($user);
                $complaint->setCreatedAt(new \DateTime());
                $complaint->setStatus(null); // Default status is pending

                $entityManager->persist($complaint);
                $entityManager->flush();

                $this->addFlash('success', 'Your complaint has been submitted successfully!');
                return $this->redirectToRoute('app_complaint_my_complaints');
            } else {
                $this->addFlash('error', 'Please correct the errors in the form.');
            }
        }

        return $this->render('complaint/new.html.twig', [
            'form' => $form->createView(),
            'user' => $user,
        ]);
    }

    #[Route('/{id}', name: 'app_complaint_show', methods: ['GET'])]
    public function show(Complaint $complaint, SessionInterface $session, EntityManagerInterface $entityManager): Response
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

        // Check if user owns the complaint or is admin
        if ($complaint->getUser() !== $user && !in_array('ROLE_ADMIN', $user->getRoles())) {
            throw $this->createAccessDeniedException('You are not allowed to view this complaint.');
        }

        return $this->render('complaint/show.html.twig', [
            'complaint' => $complaint,
            'user' => $user,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_complaint_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Complaint $complaint, EntityManagerInterface $entityManager, SessionInterface $session): Response
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

        // Only allow admin or complaint owner to edit
        if ($complaint->getUser() !== $user && !in_array('ROLE_ADMIN', $user->getRoles())) {
            throw $this->createAccessDeniedException('You are not allowed to edit this complaint.');
        }

        $form = $this->createForm(ComplaintType::class, $complaint, [

        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // If admin is responding, set the respondedBy field
                $complaint->setRespondedBy($user);

            $entityManager->flush();

            $this->addFlash('success', 'Complaint updated successfully!');
            return $this->redirectToRoute('app_complaint_my_complaints', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('complaint/edit.html.twig', [
            'complaint' => $complaint,
            'form' => $form->createView(),
            'user' => $user,
        ]);
    }

    #[Route('/{id}', name: 'app_complaint_delete', methods: ['POST'])]
    public function delete(Request $request, Complaint $complaint, EntityManagerInterface $entityManager, SessionInterface $session): Response
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

        // Only allow admin or complaint owner to delete
        if ($complaint->getUser() !== $user && !in_array('ROLE_ADMIN', $user->getRoles())) {
            throw $this->createAccessDeniedException('You are not allowed to delete this complaint.');
        }

        if ($this->isCsrfTokenValid('delete'.$complaint->getId(), $request->request->get('_token'))) {
            $entityManager->remove($complaint);
            $entityManager->flush();
            $this->addFlash('success', 'Complaint deleted successfully!');
        }

        return $this->redirectToRoute('app_complaint_my_complaints', [], Response::HTTP_SEE_OTHER);
    }


}