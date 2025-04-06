<?php

namespace App\Controller;

use App\Entity\Recompense;
use App\Form\RecompenseType;
use App\Repository\RecompenseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/recompense')]
class RecompenseController extends AbstractController
{
    #[Route('/', name: 'app_recompense_index', methods: ['GET'])]
    public function index(RecompenseRepository $recompenseRepository): Response
    {
        return $this->render('recompense/index.html.twig', [
            'recompenses' => $recompenseRepository->findAll(),
        ]);
    }

    #[Route('/program/{idprogramme}', name: 'app_recompense_program', methods: ['GET'])]
    public function programRewards(int $idprogramme, RecompenseRepository $recompenseRepository, EntityManagerInterface $entityManager): Response
    {
        $programme = $entityManager->getRepository(\App\Entity\Programmebienetre::class)->find($idprogramme);
        
        if (!$programme) {
            throw $this->createNotFoundException('Program not found');
        }

        $recompenses = $recompenseRepository->findBy(['idprogramme' => $programme]);

        return $this->render('recompense/program_rewards.html.twig', [
            'recompenses' => $recompenses,
            'programme' => $programme,
        ]);
    }

    #[Route('/new/{idprogramme}', name: 'app_recompense_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, int $idprogramme): Response
    {
        $recompense = new Recompense();
        $programme = $entityManager->getRepository(\App\Entity\Programmebienetre::class)->find($idprogramme);
        
        if (!$programme) {
            throw $this->createNotFoundException('Program not found');
        }
        
        $recompense->setIdprogramme($programme);
        
        $form = $this->createForm(RecompenseType::class, $recompense);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($recompense);
            $entityManager->flush();

            return $this->redirectToRoute('app_recompense_program', ['idprogramme' => $idprogramme], Response::HTTP_SEE_OTHER);
        }

        return $this->render('recompense/new.html.twig', [
            'recompense' => $recompense,
            'form' => $form,
            'programme' => $programme,
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

            return $this->redirectToRoute('app_programmebienetre_show', ['idprogramme' => $recompense->getIdprogramme()->getIdprogramme()], Response::HTTP_SEE_OTHER);
        }

        return $this->render('recompense/edit.html.twig', [
            'recompense' => $recompense,
            'form' => $form,
        ]);
    }

    #[Route('/{idrecompense}/delete', name: 'app_recompense_delete', methods: ['POST'])]
    public function delete(Request $request, Recompense $recompense, EntityManagerInterface $entityManager): Response
    {
        $programmeId = $recompense->getIdprogramme()->getIdprogramme();
        
        if ($this->isCsrfTokenValid('delete' . $recompense->getIdrecompense(), $request->request->get('_token'))) {
            $entityManager->remove($recompense);
            $entityManager->flush();
            
            $this->addFlash('success', 'Reward has been deleted successfully.');
        }

        return $this->redirectToRoute('app_recompense_program', ['idprogramme' => $programmeId], Response::HTTP_SEE_OTHER);
    }
}
