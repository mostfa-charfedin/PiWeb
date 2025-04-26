<?php

namespace App\Controller;

use App\Entity\Programmebienetre;
use App\Form\ProgrammebienetreType;
use App\Repository\ProgrammebienetreRepository;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class ProgrammebienetreController extends AbstractController
{
    #[Route('/programmebienetre', name: 'app_programmebienetre_index', methods: ['GET'])]
    public function index(ProgrammebienetreRepository $programmebienetreRepository, SessionInterface $session, EntityManagerInterface $em): Response
    {
        // Vérifie si l'utilisateur est connecté
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }
    
        // Récupérer l'utilisateur
        $userId = $session->get('id');
        $user = $em->getRepository(User::class)->find($userId);
    
        if (!$user) {
            throw $this->createNotFoundException('User Not Found');
        }
    
        // Récupérer les programmes
        $programmebienetres = $programmebienetreRepository->findAll();
    
        // Affichage différent selon le rôle
        if ($user->getRole() === 'ADMIN') {
            return $this->render('programmebienetre/index.html.twig', [
                'programmebienetres' => $programmebienetres,
                'user' => $user,
            ]);
        } else {
            return $this->render('programmebienetre/user_index.html.twig', [
                'programmebienetres' => $programmebienetres,
                'user' => $user,
            ]);
        }
    }

    #[Route('/programmebienetre/new', name: 'app_programmebienetre_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em, SessionInterface $session): Response
    {
        // Check if user is logged in
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        $programmebienetre = new Programmebienetre();
        
        // Get the user from the session
        $userId = $session->get('id');
        $user = $em->getRepository(User::class)->find($userId);
        
        // Associate the program with the current user
        $programmebienetre->setIduser($user);

        $form = $this->createForm(ProgrammebienetreType::class, $programmebienetre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($programmebienetre);
            $em->flush();

            return $this->redirectToRoute('app_programmebienetre_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('programmebienetre/new.html.twig', [
            'programmebienetre' => $programmebienetre,
            'form' => $form,
            'user' => $user,
            'edit_mode' => false
        ]);
    }

    #[Route('/programmebienetre/{idprogramme}', name: 'app_programmebienetre_show', methods: ['GET'])]
    public function show(Programmebienetre $programmebienetre, SessionInterface $session, EntityManagerInterface $em): Response
    {
        // Check if user is logged in
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        // Get the user from the session
        $userId = $session->get('id');
        $user = $em->getRepository(User::class)->find($userId);
        if ($user->getRole() === 'ADMIN') {
            return $this->render('programmebienetre/show.html.twig', [
                'programmebienetre' => $programmebienetre,
                'user' => $user,
            ]);
        } else {
            return $this->render('programmebienetre/user_show.html.twig', [
                'programmebienetre' => $programmebienetre,
                'user' => $user,
            ]);
        }
    }

    #[Route('/programmebienetre/{idprogramme}/edit', name: 'app_programmebienetre_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Programmebienetre $programmebienetre, EntityManagerInterface $em, SessionInterface $session): Response
    {
        // Check if user is logged in
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        // Get the user from the session
        $userId = $session->get('id');
        $user = $em->getRepository(User::class)->find($userId);

        $form = $this->createForm(ProgrammebienetreType::class, $programmebienetre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();

            return $this->redirectToRoute('app_programmebienetre_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('programmebienetre/new.html.twig', [
            'programmebienetre' => $programmebienetre,
            'form' => $form,
            'user' => $user,
            'edit_mode' => true
        ]);
    }

    #[Route('/programmebienetre/{idprogramme}/delete', name: 'app_programmebienetre_delete', methods: ['POST'])]
    public function delete(Request $request, Programmebienetre $programmebienetre, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete'.$programmebienetre->getIdprogramme(), $request->request->get('_token'))) {
            $em->remove($programmebienetre);
            $em->flush();
        }

        return $this->redirectToRoute('app_programmebienetre_index', [], Response::HTTP_SEE_OTHER);
    }
}

