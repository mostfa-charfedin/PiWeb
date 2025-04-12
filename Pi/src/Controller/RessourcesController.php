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
    public function index(EntityManagerInterface $em, SessionInterface $session): Response
    {
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        $user = $em->getRepository(User::class)->find($session->get('id'));
        $ressources = $em->getRepository(Ressources::class)->findAll();

        return $this->render('ressources/index.html.twig', [
            'ressources' => $ressources,
            'user' => $user,
        ]);
    }

    #[Route('/new', name: 'app_ressources_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em, SessionInterface $session): Response
    {
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        $user = $em->getRepository(User::class)->find($session->get('id'));
        $ressource = new Ressources();
        $form = $this->createForm(RessourcesType::class, $ressource);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($ressource);
            $em->flush();

            return $this->redirectToRoute('app_ressources_index');
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
    public function edit(Request $request, Ressources $ressource, EntityManagerInterface $em, SessionInterface $session): Response
    {
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        $user = $em->getRepository(User::class)->find($session->get('id'));

        $form = $this->createForm(RessourcesType::class, $ressource);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();

            return $this->redirectToRoute('app_ressources_index');
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
        }

        return $this->redirectToRoute('app_ressources_index');
    }
}
