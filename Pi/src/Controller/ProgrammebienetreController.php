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
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use App\Repository\AvisRepository;
use App\Repository\RecompenseRepository;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Psr\Log\LoggerInterface;

// Imports pour Endroid QrCode
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

class ProgrammebienetreController extends AbstractController
{
    #[Route('/programmebienetre', name: 'app_programmebienetre_index', methods: ['GET'])]
    public function index(
        ProgrammebienetreRepository $programmebienetreRepository,
        SessionInterface $session,
        EntityManagerInterface $em,
        RecompenseRepository $recompenseRepository,
        AvisRepository $avisRepository
    ): Response {
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        $userId = $session->get('id');
        $user = $em->getRepository(User::class)->find($userId);
        if (!$user) {
            throw $this->createNotFoundException('User Not Found');
        }

        $programmebienetres = $programmebienetreRepository->findAll();
        $recompenses = [];
        $averageRatings = [];

        foreach ($programmebienetres as $programme) {
            // Calculer la moyenne des ratings
            $avis = $avisRepository->findBy(['programme' => $programme]);
            $totalRatings = 0;
            $count = 0;
            
            foreach ($avis as $avi) {
                $totalRatings += $avi->getRating();
                $count++;
            }
            
            $averageRatings[$programme->getIdprogramme()] = $count > 0 ? round($totalRatings / $count, 1) : 0;

            if ($recompenseRepository->hasProgrammeRecompense($programme->getIdprogramme())) {
                $recompenses[$programme->getIdprogramme()] = true;
            }
        }
        $session->set('recompenses', $recompenses);

        $template = $user->getRole() === 'ADMIN' ? 'programmebienetre/index.html.twig' : 'programmebienetre/user_index.html.twig';

        return $this->render($template, [
            'programmebienetres' => $programmebienetres,
            'user' => $user,
            'averageRatings' => $averageRatings
        ]);
    }

    #[Route('/programmebienetre/new', name: 'app_programmebienetre_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request, 
        EntityManagerInterface $em, 
        SessionInterface $session,
        MailerInterface $mailer,
        LoggerInterface $logger,
        UrlGeneratorInterface $urlGenerator
    ): Response {
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        $programmebienetre = new Programmebienetre();
        $userId = $session->get('id');
        $user = $em->getRepository(User::class)->find($userId);
        $programmebienetre->setIduser($user);

        $form = $this->createForm(ProgrammebienetreType::class, $programmebienetre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $em->persist($programmebienetre);
                $em->flush();

                // Génération de l'URL du programme
                $programUrl = $urlGenerator->generate(
                    'app_programmebienetre_show', 
                    ['idprogramme' => $programmebienetre->getIdprogramme()], 
                    UrlGeneratorInterface::ABSOLUTE_URL
                );

                // Génération du QR code
                $qrCode = new QrCode($programUrl);
                
                $writer = new PngWriter();
                $result = $writer->write($qrCode);

                $qrCodeImage = $result->getString();
                $qrCodeBase64 = base64_encode($qrCodeImage);

                // Envoi des emails
                $users = $em->getRepository(User::class)->findAll();
                foreach ($users as $recipient) {
                    $emailContent = $this->renderView('emails/new_program.html.twig', [
                        'recipientName' => $recipient->getPrenom() . ' ' . $recipient->getNom(),
                        'programTitle' => $programmebienetre->getTitre(),
                        'programType' => $programmebienetre->getType(),
                        'programDescription' => $programmebienetre->getDescription(),
                        'creatorName' => $user->getPrenom() . ' ' . $user->getNom(),
                        'programUrl' => $programUrl,
                        'qrCodeBase64' => $qrCodeBase64
                    ]);

                    $email = (new Email())
                        ->from('noreply@votredomaine.com')
                        ->to($recipient->getEmail())
                        ->subject('Nouveau programme de bien-être disponible !')
                        ->html($emailContent)
                        ->attach($qrCodeImage, 'qrcode-programme.png', 'image/png');

                    $mailer->send($email);
                    $logger->info('Email envoyé à: ' . $recipient->getEmail());
                }

                $this->addFlash('success', 'Le programme a été créé et les notifications ont été envoyées.');
            } catch (\Exception $e) {
                $logger->error('Erreur: ' . $e->getMessage());
                $this->addFlash('error', 'Erreur lors de l\'envoi des notifications: ' . $e->getMessage());
            }

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
    public function show(
        Programmebienetre $programme,
        SessionInterface $session,
        EntityManagerInterface $entityManager,
        AvisRepository $avisRepository
    ): Response {
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        $userId = $session->get('id');
        $user = $entityManager->getRepository(User::class)->find($userId);
        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }

        $hasUserReviewed = $avisRepository->hasUserReviewedProgram($user, $programme);

        return $this->render('programmebienetre/show.html.twig', [
            'programme' => $programme,
            'user' => $user,
            'has_user_reviewed' => $hasUserReviewed
        ]);
    }

    #[Route('/programmebienetre/{idprogramme}/edit', name: 'app_programmebienetre_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request,
        Programmebienetre $programmebienetre,
        EntityManagerInterface $em,
        SessionInterface $session
    ): Response {
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

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
        if ($this->isCsrfTokenValid('delete' . $programmebienetre->getIdprogramme(), $request->request->get('_token'))) {
            $em->remove($programmebienetre);
            $em->flush();
        }

        return $this->redirectToRoute('app_programmebienetre_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/test-qr-code/{id}', name: 'test_qr_code')]
    public function testQrCode(
        $id, 
        UrlGeneratorInterface $urlGenerator
    ): Response {
        // Generate the URL that the QR code will point to
        $url = $this->generateUrl('app_programmebienetre_show', 
            ['idprogramme' => $id], 
            UrlGeneratorInterface::ABSOLUTE_URL
        );
        
        // Création du QR code
        $qrCode = new QrCode($url);
      
            
        $writer = new PngWriter();
        $result = $writer->write($qrCode);
            
        // Return the image directly
        return new Response($result->getString(), 200, ['Content-Type' => 'image/png']);
    }
}