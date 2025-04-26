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
    // New resource creation route

    #[Route('/new', name: 'app_ressources_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        // Check if user is logged in, if not redirect to login page
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }
        // Retrieve the logged-in user from session

        $user = $entityManager->getRepository(User::class)->find($session->get('id'));
        $ressource = new Ressources();
        
        // Set the user before creating the form
        $ressource->setId($user);

        // Create and handle the form
        $form = $this->createForm(RessourcesType::class, $ressource);
        $form->handleRequest($request);
        // Check if the form is submitted and valid

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

        // Render the form for creating a new resource

        return $this->render('ressources/new.html.twig', [
            'form' => $form->createView(),
            'ressource' => $ressource,
            'user' => $user,
        ]);
    } 

     // Show resource details route

    #[Route('/{idresource}', name: 'app_ressources_show', methods: ['GET'])]
    public function show(Ressources $ressource, EntityManagerInterface $em, SessionInterface $session): Response
    {
        // Check if user is logged in, if not redirect to login page
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }
        // Retrieve the logged-in user from session

        $user = $em->getRepository(User::class)->find($session->get('id'));

        // Render the details of the resource

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

        $user = $em->getRepository(User::class)->find($session->get('id'));
        
        // Ensure the resource belongs to the current user
        if ($ressource->getId() !== $user) {
            $this->addFlash('error', 'You do not have permission to delete this resource.');
            return $this->redirectToRoute('app_ressources_index');
        }

        if ($this->isCsrfTokenValid('delete'.$ressource->getIdresource(), $request->getPayload()->getString('_token'))) {
            // First, delete all related favorites
            $favorites = $em->getRepository('App\Entity\Favoris')->findBy(['idresource' => $ressource]);
            foreach ($favorites as $favorite) {
                $em->remove($favorite);
            }
            
            // Then delete the resource
            $em->remove($ressource);
            $em->flush();
            $this->addFlash('success', 'Resource deleted successfully!');
        }

        return $this->redirectToRoute('app_ressources_index');
    }
     // Rate resource route

    #[Route('/{idresource}/rate', name: 'app_ressources_rate', methods: ['POST'])]
    public function rate(Request $request, Ressources $ressource, EntityManagerInterface $em, SessionInterface $session): Response
    {
        if (!$session->get('id')) {
            return $this->json(['success' => false, 'message' => 'You must be logged in to rate a resource.']);
        }

        $rating = $request->request->get('rating');
        if ($rating === null) {
            return $this->json(['success' => false, 'message' => 'Rating value is required.']);
        }
        if (!is_numeric($rating)) {
            return $this->json(['success' => false, 'message' => 'Rating must be a number.']);
        }
        if ($rating < 0 || $rating > 10) {
            return $this->json(['success' => false, 'message' => 'Rating must be between 0 and 10.']);
        }

        try {
            $user = $em->getRepository(User::class)->find($session->get('id'));

            // Create new evaluation
            $evaluation = new Evaluation();
            $evaluation->setNote((int)round($rating));
            $evaluation->setDateEvaluation(new \DateTime());
            $evaluation->setRessource($ressource);
            $evaluation->setUser($user);
            $evaluation->setId($user->getId());
            $evaluation->setIdResource($ressource->getIdresource());

            // Calculate new average
            $evaluations = $ressource->getEvaluations();
            $totalRatings = count($evaluations) + 1;
            $sumRatings = array_sum(array_map(fn($e) => $e->getNote(), $evaluations->toArray())) + $evaluation->getNote();
            $newAverage = $sumRatings / $totalRatings;

            // Update resource average
            $ressource->setNoteaverage($newAverage);

            // Save changes
            $em->persist($evaluation);
            $em->flush();

            return $this->json([
                'success' => true, 
                'message' => 'Rating submitted successfully!',
                'newAverage' => $newAverage
            ]);
        } catch (\Exception $e) {
            return $this->json([
                'success' => false, 
                'message' => 'An error occurred while saving your rating. Please try again.'
            ]);
        }
    }
}
