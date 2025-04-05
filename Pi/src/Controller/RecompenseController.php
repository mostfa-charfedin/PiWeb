<?php

namespace App\Controller;

use App\Entity\Recompense;
use App\Form\RecompenseType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/recompense')]
final class RecompenseController extends AbstractController
{
    #[Route(name: 'app_recompense_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $recompenses = $entityManager
            ->getRepository(Recompense::class)
            ->findAll();

        return $this->render('recompense/index.html.twig', [
            'recompenses' => $recompenses,
        ]);
    }

    #[Route('/new', name: 'app_recompense_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $recompense = new Recompense();
        $form = $this->createForm(RecompenseType::class, $recompense);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($recompense);
            $entityManager->flush();

            return $this->redirectToRoute('app_recompense_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('recompense/new.html.twig', [
            'recompense' => $recompense,
            'form' => $form,
        ]);
    }

    #[Route('/{idrecompense}', name: 'app_recompense_show', methods: ['GET'])]
    public function show(Recompense $recompense): Response
    {
        return $this->render('recompense/show.html.twig', [
            'recompense' => $recompense,
        ]);
    }

    #[Route('/{idrecompense}/edit', name: 'app_recompense_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Recompense $recompense, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(RecompenseType::class, $recompense);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_recompense_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('recompense/edit.html.twig', [
            'recompense' => $recompense,
            'form' => $form,
        ]);
    }

    #[Route('/{idrecompense}', name: 'app_recompense_delete', methods: ['POST'])]
    public function delete(Request $request, Recompense $recompense, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$recompense->getIdrecompense(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($recompense);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_recompense_index', [], Response::HTTP_SEE_OTHER);
    }
}
