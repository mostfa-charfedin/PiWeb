<?php

namespace App\Controller;

use App\Entity\Avis;
use App\Entity\Programmebienetre;
use App\Form\AvisType;
use App\Repository\AvisRepository;
use App\Repository\ProgrammebienetreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bridge\Doctrine\Attribute\MapEntity;
use App\Entity\User;

#[Route('/avis')]
class AvisController extends AbstractController
{
    #[Route('/', name: 'app_avis_index', methods: ['GET'])]
    public function index(AvisRepository $avisRepository, SessionInterface $session, EntityManagerInterface $entityManager): Response
    {
        // Vérifier si l'utilisateur est connecté
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        // Récupérer l'utilisateur
        $userId = $session->get('id');
        $user = $entityManager->getRepository(User::class)->find($userId);
        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }

        // Récupérer tous les avis
        $avis = $avisRepository->findAll();

        // Si l'utilisateur est admin, afficher la vue admin
        if ($user->getRole() === 'ADMIN') {
            return $this->render('avis/admin_index.html.twig', [
                'avis' => $avis,
                'user' => $user,
            ]);
        } else {
            // Sinon, afficher uniquement les avis de l'utilisateur
            $userAvis = $avisRepository->findBy(['user' => $user]);
            return $this->render('avis/index.html.twig', [
                'avis' => $userAvis,
                'user' => $user,
            ]);
        }
    }

    #[Route('/new/{idprogramme}', name: 'app_avis_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager,
        ProgrammebienetreRepository $programmebienetreRepository,
        SessionInterface $session,
        int $idprogramme
    ): Response {
        // Vérifier si l'utilisateur est connecté
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        $programme = $programmebienetreRepository->find($idprogramme);
        if (!$programme) {
            throw $this->createNotFoundException('Program not found');
        }

        // Récupérer l'utilisateur
        $userId = $session->get('id');
        $user = $entityManager->getRepository(User::class)->find($userId);
        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }

        $avis = new Avis();
        $avis->setProgramme($programme);
        $avis->setUser($user);

        $form = $this->createForm(AvisType::class, $avis);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($avis);
            $entityManager->flush();

            return $this->redirectToRoute('app_avis_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('avis/new.html.twig', [
            'avis' => $avis,
            'form' => $form,
            'programme' => $programme,
            'user' => $user,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_avis_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request,
        #[MapEntity] Avis $avis,
        EntityManagerInterface $entityManager,
        SessionInterface $session,
        ProgrammebienetreRepository $programmebienetreRepository
    ): Response {
        // Vérifier si l'utilisateur est connecté
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        // Récupérer l'utilisateur
        $userId = $session->get('id');
        $user = $entityManager->getRepository(User::class)->find($userId);
        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }

        // Vérifier si l'utilisateur est l'auteur de l'avis
        if ($avis->getUser()->getId() !== $userId) {
            throw $this->createAccessDeniedException('You are not authorized to edit this review');
        }

        $form = $this->createForm(AvisType::class, $avis);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_avis_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('avis/edit.html.twig', [
            'avis' => $avis,
            'form' => $form,
            'programme' => $avis->getProgramme(),
            'user' => $user,
        ]);
    }

    #[Route('/{id}', name: 'app_avis_delete', methods: ['POST'])]
    public function delete(
        Request $request,
        #[MapEntity] Avis $avis,
        EntityManagerInterface $entityManager,
        SessionInterface $session
    ): Response {
        // Vérifier si l'utilisateur est connecté
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        // Vérifier si l'utilisateur est l'auteur de l'avis
        if ($avis->getUser()->getId() !== $session->get('id')) {
            throw $this->createAccessDeniedException('You are not authorized to delete this review');
        }

        if ($this->isCsrfTokenValid('delete'.$avis->getId(), $request->request->get('_token'))) {
            $entityManager->remove($avis);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_avis_index', [], Response::HTTP_SEE_OTHER);
    }

}