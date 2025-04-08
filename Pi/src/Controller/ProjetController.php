<?php

namespace App\Controller;

use App\Entity\Projet;
use App\Entity\Tache;
use App\Form\TacheType;
use App\Entity\User;
use App\Form\ProjetType;
use App\Repository\ProjetRepository;
use App\Repository\TacheRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class ProjetController extends AbstractController
{
    // Route for creating a new project
    #[Route('/new', name: 'projet_new')]
    public function new(Request $request, EntityManagerInterface $em, SessionInterface $session): Response
    {
        // Check if user is logged in
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');  // Redirect to login if not logged in
        }
        
        $projet = new Projet();
        
        // If you need to associate the project with the current user
        $userId = $session->get('id');
        $user = $em->getRepository(User::class)->find($userId);
        
        // Assuming Projet has a setUser method
        if (method_exists($projet, 'setUser')) {
            $projet->setUser($user);
        }
        
        $form = $this->createForm(ProjetType::class, $projet);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($projet);
            $em->flush();
            
            // Redirecting to the list of projects after creation
            return $this->redirectToRoute('projet_list');
        }
        
        // Render the 'adminprojet.html.twig' template with the form
        return $this->render('integration/adminprojet.html.twig', [
            'formProjet' => $form->createView(), // Use 'formProjet' here to match the form name in the Twig template
            'user' => $user, // Pass the user to the template
            'edit_mode' => false
        ]);
    }
    
    // Route for listing all projects
    #[Route('/projet', name: 'projet_list')]
    public function list(ProjetRepository $projetRepository, SessionInterface $session, EntityManagerInterface $em): Response
    {
        // Check if user is logged in
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');  // Redirect to login if not logged in
        }
        
        // Get the user from the session
        $userId = $session->get('id');
        $user = $em->getRepository(User::class)->find($userId);
        
        $projets = $projetRepository->findAll();
        
        // If you want to filter projects by user, you can use:
        // $projets = $projetRepository->findBy(['user' => $user]);
        
        return $this->render('integration/adminlist.html.twig', [
            'projets' => $projets,
            'user' => $user,
        ]);
    }
    
/**
 * @Route("/pi/projet/{idProjet}", name="projet_show", requirements={"idProjet"="\d+"})
 */
public function show(
    int $idProjet,
    ProjetRepository $projetRepository,
    TacheRepository $tacheRepository, // inject Task repo
    SessionInterface $session,
    EntityManagerInterface $em
): Response {
    if (!$session->get('id')) {
        return $this->redirectToRoute('login');
    }

    $userId = $session->get('id');
    $user = $em->getRepository(User::class)->find($userId);

    $projet = $projetRepository->find($idProjet);

    if (!$projet) {
        throw $this->createNotFoundException('Project not found');
    }

    // Get tasks for this project
    $taches = $tacheRepository->findBy(['idprojet' => $projet]);

    return $this->render('integration/adminshow.html.twig', [
        'projet' => $projet,
        'taches' => $taches,
        'user' => $user,
    ]);
}

    
    // Route for editing a project
    #[Route('/{idProjet}', name: 'projet_edit', requirements: ['idProjet' => '\d+'])]
    public function edit(Request $request, int $idProjet, ProjetRepository $projetRepository, EntityManagerInterface $em, SessionInterface $session): Response
    {
        // Check if user is logged in
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }
        
        $userId = $session->get('id');
        $user = $em->getRepository(User::class)->find($userId);
        
        $projet = $projetRepository->find($idProjet);
        
        if (!$projet) {
            throw $this->createNotFoundException('Project not found');
        }
        
        $form = $this->createForm(ProjetType::class, $projet);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            
            return $this->redirectToRoute('projet_list');
        }
        
        return $this->render('integration/adminprojet.html.twig', [
            'formProjet' => $form->createView(),
            'user' => $user,
            'edit_mode' => true
        ]);
    }
    
    // Route for deleting a project
    #[Route('/projet/{idProjet}/delete', name: 'projet_delete', requirements: ['idProjet' => '\d+'])]
    public function delete(int $idProjet, ProjetRepository $projetRepository, EntityManagerInterface $em): Response
    {
        $projet = $projetRepository->find($idProjet);
        
        if (!$projet) {
            throw $this->createNotFoundException('Project not found');
        }
        
        $em->remove($projet);
        $em->flush();
        
        return $this->redirectToRoute('projet_list');
    }
    #[Route('/projet/{idProjet}/tache/new', name: 'tache_new')]
public function createTache(
    int $idProjet,
    Request $request,
    EntityManagerInterface $em,
    ProjetRepository $projetRepository,
    SessionInterface $session
): Response {
    // Check if user is logged in
    if (!$session->get('id')) {
        return $this->redirectToRoute('login');
    }

    $userId = $session->get('id');
    $user = $em->getRepository(User::class)->find($userId);

    $projet = $projetRepository->find($idProjet);
    if (!$projet) {
        throw $this->createNotFoundException('Project not found');
    }

    $tache = new Tache();
    $tache->setIdprojet($projet);

    $form = $this->createForm(TacheType::class, $tache);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $em->persist($tache);
        $em->flush();

        return $this->redirectToRoute('projet_show', ['idProjet' => $idProjet]);
    }

    return $this->render('integration/task_form.html.twig', [
        'formTache' => $form->createView(),
        'edit_mode' => false,
        'user' => $user,
        'projet' => $projet
    ]);
}
#[Route('/tache/{idTache}/edit', name: 'tache_edit')]
public function editTache(
    int $idTache,
    Request $request,
    EntityManagerInterface $em,
    TacheRepository $tacheRepository,
    SessionInterface $session
): Response {
    // Check if user is logged in
    if (!$session->get('id')) {
        return $this->redirectToRoute('login');
    }

    $userId = $session->get('id');
    $user = $em->getRepository(User::class)->find($userId);

    $tache = $tacheRepository->find($idTache);
    if (!$tache) {
        throw $this->createNotFoundException('Task not found');
    }

    $form = $this->createForm(TacheType::class, $tache);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $em->flush();

        return $this->redirectToRoute('projet_show', [
            'idProjet' => $tache->getIdprojet()->getIdProjet()
        ]);
    }

    return $this->render('integration/task_form.html.twig', [
        'formTache' => $form->createView(),
        'edit_mode' => true,
        'user' => $user,
        'projet' => $tache->getIdprojet()
    ]);
}
#[Route('/tache/{idTache}/delete', name: 'tache_delete')]
public function deleteTache(
    int $idTache,
    TacheRepository $tacheRepository,
    EntityManagerInterface $em,
    SessionInterface $session
): Response {
    // Check if user is logged in
    if (!$session->get('id')) {
        return $this->redirectToRoute('login');
    }

    $userId = $session->get('id');
    $user = $em->getRepository(User::class)->find($userId);

    $tache = $tacheRepository->find($idTache);
    if (!$tache) {
        throw $this->createNotFoundException('Task not found');
    }

    $projetId = $tache->getIdprojet()->getIdProjet();

    $em->remove($tache);
    $em->flush();

    return $this->redirectToRoute('projet_show', ['idProjet' => $projetId]);
}

    
}