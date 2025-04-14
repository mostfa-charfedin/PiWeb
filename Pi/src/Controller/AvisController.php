<?php

namespace App\Controller;

use App\Entity\Avis;
use App\Form\AvisType;
use App\Repository\AvisRepository;
use App\Repository\ProgrammebienetreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

#[Route('/avis')]
class AvisController extends AbstractController
{
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
            throw $this->createNotFoundException('Programme non trouvé');
        }

        $avis = new Avis();
        $avis->setIdprogramme($programme);
        $avis->setIduser($session->get('id'));

        $form = $this->createForm(AvisType::class, $avis);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($avis);
            $entityManager->flush();

            return $this->redirectToRoute('app_programmebienetre_show', ['idprogramme' => $idprogramme], Response::HTTP_SEE_OTHER);
        }

        return $this->render('programmebienetre/avis.html.twig', [
            'avis' => $avis,
            'form' => $form,
            'programme' => $programme,
        ]);
    }

    #[Route('/{idavis}/edit', name: 'app_avis_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request,
        Avis $avis,
        EntityManagerInterface $entityManager,
        SessionInterface $session
    ): Response {
        // Vérifier si l'utilisateur est connecté
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        // Vérifier si l'utilisateur est l'auteur de l'avis
        if ($avis->getIduser() !== $session->get('id')) {
            throw $this->createAccessDeniedException('Vous n\'êtes pas autorisé à modifier cet avis');
        }

        $form = $this->createForm(AvisType::class, $avis);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_programmebienetre_show', ['idprogramme' => $avis->getIdprogramme()->getIdprogramme()], Response::HTTP_SEE_OTHER);
        }

        return $this->render('programmebienetre/avis.html.twig', [
            'avis' => $avis,
            'form' => $form,
            'programme' => $avis->getIdprogramme(),
        ]);
    }

    #[Route('/{idavis}', name: 'app_avis_delete', methods: ['POST'])]
    public function delete(
        Request $request,
        Avis $avis,
        EntityManagerInterface $entityManager,
        SessionInterface $session
    ): Response {
        // Vérifier si l'utilisateur est connecté
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        // Vérifier si l'utilisateur est l'auteur de l'avis
        if ($avis->getIduser() !== $session->get('id')) {
            throw $this->createAccessDeniedException('Vous n\'êtes pas autorisé à supprimer cet avis');
        }

        if ($this->isCsrfTokenValid('delete'.$avis->getIdavis(), $request->request->get('_token'))) {
            $entityManager->remove($avis);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_programmebienetre_show', ['idprogramme' => $avis->getIdprogramme()->getIdprogramme()], Response::HTTP_SEE_OTHER);
    }
}