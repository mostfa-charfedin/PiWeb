<?php

namespace App\Controller;

use App\Entity\Programmebienetre;
use App\Form\ProgrammebienetreType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProgrammebienetreController extends AbstractController
{
    #[Route('/programmebienetre', name: 'app_programmebienetre_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $programmebienetres = $entityManager
            ->getRepository(Programmebienetre::class)
            ->findAll();

        return $this->render('programmebienetre/index.html.twig', [
            'programmebienetres' => $programmebienetres,
        ]);
    }

    #[Route('/programmebienetre/new', name: 'app_programmebienetre_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $programmebienetre = new Programmebienetre();
        $form = $this->createForm(ProgrammebienetreType::class, $programmebienetre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($programmebienetre);
            $entityManager->flush();

            return $this->redirectToRoute('app_programmebienetre_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('programmebienetre/new.html.twig', [
            'programmebienetre' => $programmebienetre,
            'form' => $form,
        ]);
    }

    #[Route('/programmebienetre/{idprogramme}', name: 'app_programmebienetre_show', methods: ['GET'])]
    public function show(Programmebienetre $programmebienetre): Response
    {
        return $this->render('programmebienetre/show.html.twig', [
            'programmebienetre' => $programmebienetre,
        ]);
    }

    #[Route('/programmebienetre/{idprogramme}/edit', name: 'app_programmebienetre_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Programmebienetre $programmebienetre, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ProgrammebienetreType::class, $programmebienetre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_programmebienetre_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('programmebienetre/edit.html.twig', [
            'programmebienetre' => $programmebienetre,
            'form' => $form,
        ]);
    }

    #[Route('/programmebienetre/{idprogramme}', name: 'app_programmebienetre_delete', methods: ['POST'])]
    public function delete(Request $request, Programmebienetre $programmebienetre, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$programmebienetre->getIdprogramme(), $request->request->get('_token'))) {
            $entityManager->remove($programmebienetre);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_programmebienetre_index', [], Response::HTTP_SEE_OTHER);
    }
}
