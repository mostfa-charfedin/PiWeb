<?php

namespace App\Controller;

use App\Entity\Ressources;
use App\Entity\User;
use App\Form\RessourcesType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/ressources')]
class RessourcesController extends AbstractController
{
    #[Route('', name: 'app_ressources_index', methods: ['GET'])]
    public function index(Request $request, EntityManagerInterface $em, SessionInterface $session): Response
    {
        // Check if user is logged in
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        // Retrieve the logged-in user from session
        $user = $em->getRepository(User::class)->find($session->get('id'));

        // Get search filter criteria from query parameters
        $searchTitle = $request->query->get('searchTitle');
        $type = $request->query->get('type');
        $searchDescription = $request->query->get('searchDescription');

        // Create the base query to filter resources
        $queryBuilder = $em->getRepository(Ressources::class)->createQueryBuilder('r');

        // Apply Title filter if it's set
        if ($searchTitle) {
            $queryBuilder->andWhere('r.titre LIKE :searchTitle')
                         ->setParameter('searchTitle', '%' . $searchTitle . '%');
        }

        // Apply Type filter if it's set
        if ($type) {
            $queryBuilder->andWhere('r.type = :type')
                         ->setParameter('type', $type);
        }

        // Apply Description filter if it's set
        if ($searchDescription) {
            $queryBuilder->andWhere('r.description LIKE :searchDescription')
                         ->setParameter('searchDescription', '%' . $searchDescription . '%');
        }

        // Execute the query
        $ressources = $queryBuilder->getQuery()->getResult();

        // Return the filtered results to the view
        return $this->render('ressources/index.html.twig', [
            'ressources' => $ressources,
            'user' => $user,
        ]);
    }

    #[Route('/new', name: 'app_ressources_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        $user = $entityManager->getRepository(User::class)->find($session->get('id'));
        $ressource = new Ressources();
        
        // Set the user before creating the form
        $ressource->setId($user);
        
        $form = $this->createForm(RessourcesType::class, $ressource);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                try {
                    $entityManager->persist($ressource);
                    $entityManager->flush();
                    $this->addFlash('success', 'Resource created successfully!');
                    return $this->redirectToRoute('app_ressources_index');
                } catch (\Exception $e) {
                    $this->addFlash('error', 'An error occurred while creating the resource. Please try again.');
                }
            } else {
                $this->addFlash('error', 'Please correct the errors in the form.');
            }
        }

        return $this->render('ressources/new.html.twig', [
            'form' => $form->createView(),
            'ressource' => $ressource,
            'user' => $user,
        ]);
    }

    #[Route('/{idresource}', name: 'app_ressources_show', methods: ['GET'])]
    public function show(Ressources $ressource, EntityManagerInterface $em, SessionInterface $session): Response
    {
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        $user = $em->getRepository(User::class)->find($session->get('id'));

        return $this->render('ressources/show.html.twig', [
            'ressource' => $ressource,
            'user' => $user,
        ]);
    }

    #[Route('/{idresource}/edit', name: 'app_ressources_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Ressources $ressource, EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        $user = $entityManager->getRepository(User::class)->find($session->get('id'));
        
        // Ensure the resource belongs to the current user
        if ($ressource->getId() !== $user) {
            $this->addFlash('error', 'You do not have permission to edit this resource.');
            return $this->redirectToRoute('app_ressources_index');
        }
        
        $form = $this->createForm(RessourcesType::class, $ressource);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                try {
                    $entityManager->flush();
                    $this->addFlash('success', 'Resource updated successfully!');
                    return $this->redirectToRoute('app_ressources_index');
                } catch (\Exception $e) {
                    $this->addFlash('error', 'An error occurred while updating the resource. Please try again.');
                }
            } else {
                $this->addFlash('error', 'Please correct the errors in the form.');
            }
        }

        return $this->render('ressources/edit.html.twig', [
            'form' => $form->createView(),
            'ressource' => $ressource,
            'user' => $user,
        ]);
    }

    #[Route('/{idresource}/delete', name: 'app_ressources_delete', methods: ['POST'])]
    public function delete(Request $request, Ressources $ressource, EntityManagerInterface $em, SessionInterface $session): Response
    {
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        if ($this->isCsrfTokenValid('delete'.$ressource->getIdresource(), $request->getPayload()->getString('_token'))) {
            $em->remove($ressource);
            $em->flush();
            $this->addFlash('success', 'Resource deleted successfully!');
        }

        return $this->redirectToRoute('app_ressources_index');
    }

    #[Route('/{idresource}/rate', name: 'app_ressources_rate', methods: ['POST'])]
    public function rate(Request $request, Ressources $ressource, EntityManagerInterface $em, SessionInterface $session): Response
    {
        if (!$session->get('id')) {
            return $this->json(['success' => false, 'message' => 'Not authenticated']);
        }

        $rating = $request->request->get('rating');
        if ($rating === null || !is_numeric($rating) || $rating < 0 || $rating > 10) {
            return $this->json(['success' => false, 'message' => 'Invalid rating value']);
        }

        // Create new evaluation
        $evaluation = new Evaluation();
        $evaluation->setNote((int)$rating);
        $evaluation->setDateEvaluation(new \DateTime());
        $evaluation->setRessource($ressource);
        $evaluation->setUser($em->getRepository(User::class)->find($session->get('id')));

        // Calculate new average
        $evaluations = $ressource->getEvaluations();
        $totalRatings = count($evaluations) + 1;
        $sumRatings = array_sum(array_map(fn($e) => $e->getNote(), $evaluations->toArray())) + $rating;
        $newAverage = $sumRatings / $totalRatings;

        // Update resource average
        $ressource->setNoteaverage($newAverage);

        // Save changes
        $em->persist($evaluation);
        $em->flush();

        return $this->json(['success' => true, 'newAverage' => $newAverage]);
    }
}
