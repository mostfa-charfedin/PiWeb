<?php

namespace App\Controller;

use App\Entity\Favoris;
use App\Form\FavorisType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Entity\User;

#[Route('/favoris')]
final class FavorisController extends AbstractController
{
    #[Route(name: 'app_favoris_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        // Check if user is logged in
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        $userId = $session->get('id');
        $user = $entityManager->getRepository(User::class)->find($userId);
        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }
        // Fetch all favoris (favorites) related to the user

        $favoris = $entityManager
            ->getRepository(Favoris::class)
            ->findBy(['id' => $user]);

        // Ensure titreRessource is set for each favori
        foreach ($favoris as $favori) {
            if (!$favori->getTitreRessource() && $favori->getIdresource()) {
                $favori->setTitreRessource($favori->getIdresource()->getTitre());
                $entityManager->persist($favori);
            }
        }
        $entityManager->flush();

        // Render the list of favorites

        return $this->render('favoris/index.html.twig', [
            'favoris' => $favoris,
            'user' => $user,
        ]);
    }

    #[Route('/new', name: 'app_favoris_new', methods: ['GET', 'POST'])]
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

        $favori = new Favoris();
        $favori->setId($user); // Set the user immediately
        
        $form = $this->createForm(FavorisType::class, $favori);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Get the selected resource and set its title
            $resource = $favori->getIdresource();
            if ($resource) {
                $favori->setTitreRessource($resource->getTitre());
                $favori->setRessource($resource);
            } else {
                $this->addFlash('error', 'Veuillez sélectionner une ressource');
                return $this->redirectToRoute('app_favoris_new');
            }
            
            $entityManager->persist($favori);
            $entityManager->flush();

            return $this->redirectToRoute('app_favoris_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('favoris/new.html.twig', [
            'favori' => $favori,
            'form' => $form,
            'user' => $user,
        ]);
    }

    #[Route('/{idfavoris}', name: 'app_favoris_show', methods: ['GET'])]
    public function show(Favoris $favori, EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        $userId = $session->get('id');
        $user = $entityManager->getRepository(User::class)->find($userId);
        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }

        return $this->render('favoris/show.html.twig', [
            'favori' => $favori,
            'user' => $user,
        ]);
    }

    #[Route('/{idfavoris}/edit', name: 'app_favoris_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Favoris $favori, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(FavorisType::class, $favori);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Update the resource title when the resource is changed
            $resource = $favori->getIdresource();
            if ($resource) {
                $favori->setTitreRessource($resource->getTitre());
                $favori->setRessource($resource);
            }
            
            $entityManager->flush();

            return $this->redirectToRoute('app_favoris_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('favoris/edit.html.twig', [
            'favori' => $favori,
            'form' => $form,
        ]);
    }

    #[Route('/{idfavoris}', name: 'app_favoris_delete', methods: ['POST'])]
    public function delete(Request $request, Favoris $favori, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$favori->getIdfavoris(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($favori);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_favoris_index', [], Response::HTTP_SEE_OTHER);
    }
}
