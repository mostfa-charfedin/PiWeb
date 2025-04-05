<?php

namespace App\Controller;

use App\Entity\Programmebienetre;
use App\Form\ProgrammebienetreType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class ProgrammebienetreController extends AbstractController
{
    #[Route('/programmebienetre', name: 'app_programmebienetre_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $programmebienetres = $entityManager
            ->getRepository(Programmebienetre::class)
            ->findAll();

        return $this->render('programmebienetre/index.html.twig', [
            'programmebienetre' => $programmebienetres,
        ]);
    }

    #[Route('/programmebienetre/new', name: 'app_programmebienetre_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, ValidatorInterface $validator): Response
    {
        $programmebienetre = new Programmebienetre();
        $form = $this->createForm(ProgrammebienetreType::class, $programmebienetre);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $errors = $validator->validate($programmebienetre);
            
            if (count($errors) === 0) {
                try {
                    $entityManager->persist($programmebienetre);
                    $entityManager->flush();
                    
                    $this->addFlash('success', 'Le programme a été créé avec succès.');
                    return $this->redirectToRoute('app_programmebienetre_index', [], Response::HTTP_SEE_OTHER);
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Une erreur est survenue lors de la création du programme.');
                }
            } else {
                foreach ($errors as $error) {
                    $this->addFlash('error', $error->getMessage());
                }
            }
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
    public function edit(Request $request, Programmebienetre $programmebienetre, EntityManagerInterface $entityManager, ValidatorInterface $validator): Response
    {
        $form = $this->createForm(ProgrammebienetreType::class, $programmebienetre);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $errors = $validator->validate($programmebienetre);
            
            if (count($errors) === 0) {
                try {
                    $entityManager->flush();
                    
                    $this->addFlash('success', 'Le programme a été modifié avec succès.');
                    return $this->redirectToRoute('app_programmebienetre_index', [], Response::HTTP_SEE_OTHER);
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Une erreur est survenue lors de la modification du programme.');
                }
            } else {
                foreach ($errors as $error) {
                    $this->addFlash('error', $error->getMessage());
                }
            }
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
            try {
                $entityManager->remove($programmebienetre);
                $entityManager->flush();
                $this->addFlash('success', 'Le programme a été supprimé avec succès.');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Une erreur est survenue lors de la suppression du programme.');
            }
        }

        return $this->redirectToRoute('app_programmebienetre_index', [], Response::HTTP_SEE_OTHER);
    }
}
