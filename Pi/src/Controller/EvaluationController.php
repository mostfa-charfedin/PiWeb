<?php

namespace App\Controller;

use App\Entity\Evaluation;
use App\Form\EvaluationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Entity\User;

#[Route('/evaluation')]
final class EvaluationController extends AbstractController
{
    #[Route(name: 'app_evaluation_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }
        // Get the current logged-in user

        $userId = $session->get('id');
        $user = $entityManager->getRepository(User::class)->find($userId);
        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }

        // Check if user is admin
        if ($user->getRole() !== 'ADMIN') {
            $this->addFlash('error', 'Access denied. This section is for administrators only.');
            return $this->redirectToRoute('profile');
        }
        // Fetch all evaluations

        $evaluations = $entityManager
            ->getRepository(Evaluation::class)
            ->findAll();

        // Get all resource titles
        $resourceTitles = [];
        $resources = $entityManager
            ->getRepository('App\Entity\Ressources')
            ->findAll();
        
        foreach ($resources as $resource) {
            $resourceTitles[$resource->getIdresource()] = $resource->getTitre();
        }

        // Debug information
        dump($evaluations);
        dump($resourceTitles);

        // Render the evaluations page

        return $this->render('evaluation/index.html.twig', [
            'evaluations' => $evaluations,
            'resourceTitles' => $resourceTitles,
            'user' => $user,
        ]);
    }

    #[Route('/new', name: 'app_evaluation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        $userId = $session->get('id');
        $user = $entityManager->getRepository(User::class)->find($userId);
        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }

        // Check if user is admin
        if ($user->getRole() !== 'ADMIN') {
            $this->addFlash('error', 'Access denied. This section is for administrators only.');
            return $this->redirectToRoute('profile');
        }

        $evaluation = new Evaluation();
        $form = $this->createForm(EvaluationType::class, $evaluation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($evaluation);
            $entityManager->flush();

            return $this->redirectToRoute('app_evaluation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('evaluation/new.html.twig', [
            'evaluation' => $evaluation,
            'form' => $form,
        ]);
    }

    #[Route('/{idevaluation}', name: 'app_evaluation_show', methods: ['GET'])]
    public function show(int $idevaluation, EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        $userId = $session->get('id');
        $user = $entityManager->getRepository(User::class)->find($userId);
        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }

        // Check if user is admin
        if ($user->getRole() !== 'ADMIN') {
            $this->addFlash('error', 'Access denied. This section is for administrators only.');
            return $this->redirectToRoute('profile');
        }

        $evaluation = $entityManager->getRepository(Evaluation::class)->find($idevaluation);

        if (!$evaluation) {
            throw $this->createNotFoundException('Evaluation not found');
        }

        // Get the resource title
        $resource = $entityManager
            ->getRepository('App\Entity\Ressources')
            ->find($evaluation->getIdResource());

        $resourceTitle = $resource ? $resource->getTitre() : 'Unknown Resource';

        return $this->render('evaluation/show.html.twig', [
            'evaluation' => $evaluation,
            'resourceTitle' => $resourceTitle,
            'user' => $user,
        ]);
    }

    #[Route('/{idevaluation}/edit', name: 'app_evaluation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Evaluation $evaluation, EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        $userId = $session->get('id');
        $user = $entityManager->getRepository(User::class)->find($userId);
        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }

        // Check if user is admin
        if ($user->getRole() !== 'ADMIN') {
            $this->addFlash('error', 'Access denied. This section is for administrators only.');
            return $this->redirectToRoute('profile');
        }

        $form = $this->createForm(EvaluationType::class, $evaluation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_evaluation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('evaluation/edit.html.twig', [
            'evaluation' => $evaluation,
            'form' => $form,
        ]);
    }

    #[Route('/{idevaluation}/delete', name: 'app_evaluation_delete', methods: ['GET'])]
    public function delete(Evaluation $evaluation, EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        $userId = $session->get('id');
        $user = $entityManager->getRepository(User::class)->find($userId);
        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }

        // Check if user is admin
        if ($user->getRole() !== 'ADMIN') {
            $this->addFlash('error', 'Access denied. This section is for administrators only.');
            return $this->redirectToRoute('profile');
        }

        $entityManager->remove($evaluation);
        $entityManager->flush();

        return $this->redirectToRoute('app_evaluation_index', [], Response::HTTP_SEE_OTHER);
    }
}
