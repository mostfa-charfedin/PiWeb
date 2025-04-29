<?php

namespace App\Controller;

use App\Entity\Evaluation;
use App\Form\EvaluationType;
use App\Service\PerformanceEmailService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Entity\User;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

#[Route('/evaluation')]
final class EvaluationController extends AbstractController
{
    public function __construct(
        private readonly PerformanceEmailService $performanceEmailService
    ) {
    }

    #[Route(name: 'app_evaluation_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }
        // Get the current logged-in user

        $userId = $session->get('id');
        $user = $entityManager->getRepository(User::class)->find($userId);
        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }

        // Check if user is admin
        if ($user->getRole() !== 'ADMIN') {
            $this->addFlash('error', 'Access denied. This section is for administrators only.');
            return $this->redirectToRoute('profile');
        }
        // Fetch all evaluations

        $evaluations = $entityManager
            ->getRepository(Evaluation::class)
            ->findAll();

        // Get all resource titles
        $resourceTitles = [];
        $resources = $entityManager
            ->getRepository('App\Entity\Ressources')
            ->findAll();
        
        foreach ($resources as $resource) {
            $resourceTitles[$resource->getIdresource()] = $resource->getTitre();
        }

        // Debug information
        dump($evaluations);
        dump($resourceTitles);

        // Render the evaluations page

        return $this->render('evaluation/index.html.twig', [
            'evaluations' => $evaluations,
            'resourceTitles' => $resourceTitles,
            'user' => $user,
        ]);
    }

    #[Route('/new', name: 'app_evaluation_new', methods: ['GET', 'POST'])]
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

        // Check if user is admin
        if ($user->getRole() !== 'ADMIN') {
            $this->addFlash('error', 'Access denied. This section is for administrators only.');
            return $this->redirectToRoute('profile');
        }

        $evaluation = new Evaluation();
        $form = $this->createForm(EvaluationType::class, $evaluation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($evaluation);
            $entityManager->flush();

            return $this->redirectToRoute('app_evaluation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('evaluation/new.html.twig', [
            'evaluation' => $evaluation,
            'form' => $form,
        ]);
    }

    #[Route('/{idevaluation}', name: 'app_evaluation_show', methods: ['GET'])]
    public function show(int $idevaluation, EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        $userId = $session->get('id');
        $user = $entityManager->getRepository(User::class)->find($userId);
        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }

        // Check if user is admin
        if ($user->getRole() !== 'ADMIN') {
            $this->addFlash('error', 'Access denied. This section is for administrators only.');
            return $this->redirectToRoute('profile');
        }

        $evaluation = $entityManager->getRepository(Evaluation::class)->find($idevaluation);

        if (!$evaluation) {
            throw $this->createNotFoundException('Evaluation not found');
        }

        // Get the resource title
        $resource = $entityManager
            ->getRepository('App\Entity\Ressources')
            ->find($evaluation->getIdResource());

        $resourceTitle = $resource ? $resource->getTitre() : 'Unknown Resource';

        return $this->render('evaluation/show.html.twig', [
            'evaluation' => $evaluation,
            'resourceTitle' => $resourceTitle,
            'user' => $user,
        ]);
    }

    #[Route('/{idevaluation}/edit', name: 'app_evaluation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Evaluation $evaluation, EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        $userId = $session->get('id');
        $user = $entityManager->getRepository(User::class)->find($userId);
        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }

        // Check if user is admin
        if ($user->getRole() !== 'ADMIN') {
            $this->addFlash('error', 'Access denied. This section is for administrators only.');
            return $this->redirectToRoute('profile');
        }

        $form = $this->createForm(EvaluationType::class, $evaluation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_evaluation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('evaluation/edit.html.twig', [
            'evaluation' => $evaluation,
            'form' => $form,
        ]);
    }

    #[Route('/{idevaluation}/delete', name: 'app_evaluation_delete', methods: ['GET'])]
    public function delete(Evaluation $evaluation, EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        $userId = $session->get('id');
        $user = $entityManager->getRepository(User::class)->find($userId);
        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }

        // Check if user is admin
        if ($user->getRole() !== 'ADMIN') {
            $this->addFlash('error', 'Access denied. This section is for administrators only.');
            return $this->redirectToRoute('profile');
        }

        $entityManager->remove($evaluation);
        $entityManager->flush();

        return $this->redirectToRoute('app_evaluation_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{idevaluation}/export-pdf', name: 'app_evaluation_export_pdf', methods: ['GET'])]
    public function exportPdf(int $idevaluation, EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        $userId = $session->get('id');
        $user = $entityManager->getRepository(User::class)->find($userId);
        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }

        // Check if user is admin
        if ($user->getRole() !== 'ADMIN') {
            $this->addFlash('error', 'Access denied. This section is for administrators only.');
            return $this->redirectToRoute('profile');
        }

        $evaluation = $entityManager->getRepository(Evaluation::class)->find($idevaluation);

        if (!$evaluation) {
            throw $this->createNotFoundException('Evaluation not found');
        }

        // Get the resource title
        $resource = $entityManager
            ->getRepository('App\Entity\Ressources')
            ->find($evaluation->getIdResource());

        $resourceTitle = $resource ? $resource->getTitre() : 'Unknown Resource';

        try {
            // Create new PDF instance
            $dompdf = new \Dompdf\Dompdf();
            
            // Set options
            $dompdf->set_option('defaultFont', 'Arial');
            $dompdf->set_option('isHtml5ParserEnabled', true);
            $dompdf->set_option('isPhpEnabled', true);
            $dompdf->set_option('isRemoteEnabled', true);

            // Generate the HTML for the PDF
            $html = $this->renderView('evaluation/pdf_template.html.twig', [
                'evaluation' => $evaluation,
                'resourceTitle' => $resourceTitle,
            ]);

            // Load HTML to Dompdf
            $dompdf->loadHtml($html);

            // Setup the paper size and orientation
            $dompdf->setPaper('A4', 'portrait');

            // Render the HTML as PDF
            $dompdf->render();

            // Generate a unique filename
            $filename = sprintf('evaluation-%d-%s.pdf', $evaluation->getIdEvaluation(), date('Y-m-d'));

            // Stream the file to the browser
            return new Response(
                $dompdf->output(),
                Response::HTTP_OK,
                [
                    'Content-Type' => 'application/pdf',
                    'Content-Disposition' => sprintf('attachment; filename="%s"', $filename),
                ]
            );
        } catch (\Exception $e) {
            $this->addFlash('error', 'An error occurred while generating the PDF: ' . $e->getMessage());
            return $this->redirectToRoute('app_evaluation_show', ['idevaluation' => $evaluation->getIdEvaluation()]);
        }
    }

    #[Route('/send-stats', name: 'app_evaluation_send_stats', methods: ['POST'])]
    public function sendStats(EntityManagerInterface $entityManager, SessionInterface $session, MailerInterface $mailer, UrlGeneratorInterface $urlGenerator): Response
    {
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        $userId = $session->get('id');
        $user = $entityManager->getRepository(User::class)->find($userId);
        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }

        if ($user->getRole() !== 'ADMIN') {
            $this->addFlash('error', 'Access denied. This section is for administrators only.');
            return $this->redirectToRoute('profile');
        }

        $evaluations = $entityManager
            ->getRepository(Evaluation::class)
            ->findAll();
        
        // Calculate statistics
        $totalResources = count($evaluations);
        $avgScore = $totalResources > 0 ? array_sum(array_map(fn($e) => $e->getNote(), $evaluations)) / $totalResources : 0;
        $highestScore = $totalResources > 0 ? max(array_map(fn($e) => $e->getNote(), $evaluations)) : 0;
        $lowestScore = $totalResources > 0 ? min(array_map(fn($e) => $e->getNote(), $evaluations)) : 0;

        // Create email content
        $timezone = new \DateTimeZone('Europe/Paris'); // This is GMT+1
        $currentDateTime = (new \DateTime('now', $timezone))->format('Y-m-d H:i:s');
        $emailContent = sprintf(
            "Resource Performance Statistics Report\n\n" .
            "**Date and Time (GMT+1): %s**\n\n" .
            "Total Resources: %d\n" .
            "Average Score: %.1f/10\n" .
            "Highest Score: %.1f/10\n" .
            "Lowest Score: %.1f/10\n\n" .
            "Performance Categories:\n" .
            "- Excellent (8-10): %d\n" .
            "- Good (5-7.9): %d\n" .
            "- Fair (2-4.9): %d\n" .
            "- Poor (0-1.9): %d\n\n" .
            "View detailed statistics: %s",
            $currentDateTime,
            $totalResources,
            $avgScore,
            $highestScore,
            $lowestScore,
            count(array_filter($evaluations, fn($e) => $e->getNote() >= 8)),
            count(array_filter($evaluations, fn($e) => $e->getNote() >= 5 && $e->getNote() < 8)),
            count(array_filter($evaluations, fn($e) => $e->getNote() >= 2 && $e->getNote() < 5)),
            count(array_filter($evaluations, fn($e) => $e->getNote() < 2)),
            $urlGenerator->generate('app_evaluation_index', [], UrlGeneratorInterface::ABSOLUTE_URL)
        );

        try {
            // Create and send email
            $email = (new Email())
                ->from($_ENV['MAILER_FROM'] ?? 'noreply@yourdomain.com')
                ->to($user->getEmail())
                ->subject('Resource Performance Statistics Report - ' . $currentDateTime . ' (GMT+1)')
                ->text($emailContent);

            $mailer->send($email);
            $this->addFlash('success', 'Performance statistics report has been sent to your email successfully!');
        } catch (\Exception $e) {
            $this->addFlash('error', 'Failed to send performance statistics report: ' . $e->getMessage());
        }

        return $this->redirectToRoute('app_evaluation_index');
    }
}