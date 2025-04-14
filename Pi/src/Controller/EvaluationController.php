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

        $userId = $session->get('id');
        $user = $entityManager->getRepository(User::class)->find($userId);
        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }

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

        return $this->render('evaluation/index.html.twig', [
            'evaluations' => $evaluations,
            'resourceTitles' => $resourceTitles,
            'user' => $user,
        ]);
    }

    #[Route('/new', name: 'app_evaluation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
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
    public function edit(Request $request, Evaluation $evaluation, EntityManagerInterface $entityManager): Response
    {
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

        try {
            // Récupérer la ressource associée via la relation
            $resource = $evaluation->getRessource();
            
            if ($resource) {
                // Supprimer la relation bidirectionnelle
                $resource->removeEvaluation($evaluation);
                $evaluation->setRessource(null);
                
                // Récupérer toutes les évaluations de la ressource
                $evaluations = $resource->getEvaluations();
                
                // Calculer la nouvelle moyenne sans l'évaluation à supprimer
                $totalRatings = count($evaluations) - 1;
                $sumRatings = array_sum(array_map(fn($e) => $e->getNote(), $evaluations->toArray())) - $evaluation->getNote();
                
                // Mettre à jour la note moyenne de la ressource
                if ($totalRatings > 0) {
                    $newAverage = $sumRatings / $totalRatings;
                    $resource->setNoteaverage($newAverage);
                } else {
                    $resource->setNoteaverage(0);
                }
            }

            // Supprimer l'évaluation
            $entityManager->remove($evaluation);
            $entityManager->flush();

            $this->addFlash('success', 'L\'évaluation a été supprimée avec succès.');
        } catch (\Exception $e) {
            $this->addFlash('error', 'Une erreur est survenue lors de la suppression de l\'évaluation.');
        }

        return $this->redirectToRoute('app_evaluation_index', [], Response::HTTP_SEE_OTHER);
    }
}
