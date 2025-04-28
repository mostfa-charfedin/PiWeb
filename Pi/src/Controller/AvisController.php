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
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Knp\Snappy\Pdf;

#[Route('/avis')]
class AvisController extends AbstractController
{
    #[Route('/', name: 'app_avis_index', methods: ['GET'])]
    public function index(Request $request, AvisRepository $avisRepository, SessionInterface $session, EntityManagerInterface $entityManager): Response
    {
        // Check if user is logged in
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        // Get user
        $userId = $session->get('id');
        $user = $entityManager->getRepository(User::class)->find($userId);
        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }

        // Get all reviews
        $avis = $avisRepository->findAllWithRelations();

        // If user is not admin, filter to show only their reviews
        if ($user->getRole() !== 'ADMIN') {
            $avis = array_filter($avis, function($a) use ($user) {
                return $a->getUser() && $a->getUser()->getId() === $user->getId();
            });
        }

        // Return appropriate template based on user role
        $template = $user->getRole() === 'ADMIN' ? 'avis/admin_index.html.twig' : 'avis/user_index.html.twig';

        return $this->render($template, [
            'avis' => $avis,
            'user' => $user
        ]);
    }

    #[Route('/new/{idprogramme}', name: 'app_avis_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager,
        ProgrammebienetreRepository $programmebienetreRepository,
        AvisRepository $avisRepository,
        SessionInterface $session,
        int $idprogramme
    ): Response {
        // Vérifier si l'utilisateur est connecté
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        $programme = $programmebienetreRepository->find($idprogramme);
        if (!$programme) {
            $this->addFlash('error', 'Program not found.');
            return $this->redirectToRoute('app_programmebienetre_index');
        }

        // Récupérer l'utilisateur
        $userId = $session->get('id');
        $user = $entityManager->getRepository(User::class)->find($userId);
        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }

        // Vérifier si l'utilisateur a déjà donné son avis sur ce programme
        if ($avisRepository->hasUserReviewedProgram($user, $programme)) {
            $this->addFlash('warning', 'You have already reviewed this program.');
            return $this->redirectToRoute('app_programmebienetre_show', ['idprogramme' => $idprogramme]);
        }

        $avis = new Avis();
        $avis->setProgramme($programme);
        $avis->setUser($user);

        $form = $this->createForm(AvisType::class, $avis);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($avis);
            $entityManager->flush();

            $this->addFlash('success', 'Your review has been added successfully.');
            
            // Récupérer l'utilisateur et ses avis
            $userId = $session->get('id');
            $user = $entityManager->getRepository(User::class)->find($userId);
            $avis = $avisRepository->findBy(['user' => $user]);
            
            // Rediriger vers la page des avis de l'utilisateur
            return $this->render('avis/user_index.html.twig', [
                'avis' => $avis,
                'user' => $user
            ]);
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

    #[Route('/{id}/delete', name: 'app_avis_delete', methods: ['POST'])]
    public function delete(Request $request, Avis $avi, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$avi->getId(), $request->request->get('_token'))) {
            $entityManager->remove($avi);
            $entityManager->flush();
            
            $this->addFlash('success', 'Review deleted successfully.');
        }

        return $this->redirectToRoute('app_avis_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/stats', name: 'app_avis_stats', methods: ['GET'])]
    public function stats(AvisRepository $avisRepository, SessionInterface $session, EntityManagerInterface $entityManager): Response
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

        // Récupérer les statistiques des avis
        $ratingData = $avisRepository->getRatingStatistics();
        $averageRating = $avisRepository->getAverageRating();
        $programStats = $avisRepository->getProgramStatistics();
        $totalReviewers = $avisRepository->getTotalUniqueReviewers();
        
        return $this->render('avis/stats.html.twig', [
            'ratingData' => $ratingData,
            'averageRating' => $averageRating,
            'programStats' => $programStats,
            'totalReviewers' => $totalReviewers,
            'user' => $user
        ]);
    }

    #[Route('/avis/stats/export/csv', name: 'avis_stats_export_csv')]
    public function exportStatsCsv(AvisRepository $avisRepository): StreamedResponse
    {
        // 1. Récupération des données statistiques
        $programStats = $avisRepository->getProgramStats();        // Statistiques par programme
        $ratingData = $avisRepository->getRatingStatistics();      // Distribution des notes
        $averageRating = $avisRepository->getAverageRating();      // Note moyenne globale
        $totalReviewers = $avisRepository->getTotalUniqueReviewers(); // Nombre total de reviewers

        // 2. Création de la réponse streamée
        $response = new StreamedResponse(function () use ($programStats, $ratingData, $averageRating, $totalReviewers) {
            // Ouverture du flux de sortie
            $handle = fopen('php://output', 'w+');
            
            // 3. Section 1: Statistiques globales
            fputcsv($handle, ['=== GLOBAL STATISTICS ===']);
            fputcsv($handle, ['Metric', 'Value']);
            fputcsv($handle, ['Total Reviewers', $totalReviewers]);
            fputcsv($handle, ['Average Rating', number_format($averageRating, 1) . '/5']);
            fputcsv($handle, []); // Séparateur
            
            // 4. Section 2: Distribution des notes
            fputcsv($handle, ['=== RATING DISTRIBUTION ===']);
            fputcsv($handle, ['Rating', 'Number of Reviews', 'Percentage']);
            $totalReviews = array_sum($ratingData);
            for ($i = 5; $i >= 1; $i--) {
                $count = $ratingData[5-$i];
                $percentage = $totalReviews > 0 ? round(($count / $totalReviews) * 100, 1) : 0;
                fputcsv($handle, [
                    $i . ' Stars',
                    $count,
                    $percentage . '%'
                ]);
            }
            fputcsv($handle, []); // Séparateur
            
            // 5. Section 3: Statistiques par programme
            fputcsv($handle, ['=== PROGRAM STATISTICS ===']);
            fputcsv($handle, ['Program Name', 'Reviews Count', 'Average Rating']);
            foreach ($programStats as $stat) {
                fputcsv($handle, [
                    $stat['programName'],
                    $stat['reviewCount'],
                    number_format($stat['averageRating'], 1) . '/5'
                ]);
            }
            
            // Fermeture du flux
            fclose($handle);
        });

        // Configuration des en-têtes HTTP
        $response->headers->set('Content-Type', 'text/csv; charset=utf-8');
        $response->headers->set('Content-Disposition', 'attachment; filename="reviews_statistics_' . date('Y-m-d') . '.csv"');

        return $response;
    }

    #[Route('/avis/stats/export/pdf', name: 'avis_stats_export_pdf')]
    public function exportStatsPdf(AvisRepository $avisRepository, Pdf $pdf): Response
    {
        $programStats = $avisRepository->getProgramStats();
        $ratingData = $avisRepository->getRatingStatistics();
        $averageRating = $avisRepository->getAverageRating();
        $totalReviewers = $avisRepository->getTotalUniqueReviewers();

        // Generate HTML
        $html = $this->renderView('avis/stats_pdf.html.twig', [
            'programStats' => $programStats,
            'ratingData' => $ratingData,
            'averageRating' => $averageRating,
            'totalReviewers' => $totalReviewers
        ]);

        // Generate PDF
        $pdfContent = $pdf->getOutputFromHtml($html, [
            'page-size' => 'A4',
            'orientation' => 'portrait',
            'margin-top' => '20mm',
            'margin-right' => '20mm',
            'margin-bottom' => '20mm',
            'margin-left' => '20mm',
        ]);

        // Create response
        $response = new Response($pdfContent);
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', 'attachment; filename="reviews_stats.pdf"');

        return $response;
    }
}