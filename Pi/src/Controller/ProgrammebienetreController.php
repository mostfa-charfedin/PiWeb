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
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;


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
    
                // Envoi des emails
                $users = $em->getRepository(User::class)->findAll();
                foreach ($users as $recipient) {
                    $emailContent = $this->renderView('emails/new_program.html.twig', [
                        'recipientName' => $recipient->getPrenom() . ' ' . $recipient->getNom(),
                        'programTitle' => $programmebienetre->getTitre(),
                        'programType' => $programmebienetre->getType(),
                        'programDescription' => $programmebienetre->getDescription(),
                        'creatorName' => $user->getPrenom() . ' ' . $user->getNom(),
                        'programUrl' => $programUrl
                    ]);
    
                    $email = (new Email())
                        ->from('noreply@votredomaine.com')
                        ->to($recipient->getEmail())
                        ->subject('New Wellness Program Created !')
                        ->html($emailContent);
    
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
        $idprogramme,
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
        
        // Manually fetch the program entity
        $programme = $entityManager->getRepository(Programmebienetre::class)->find($idprogramme);
        
        if (!$programme) {
            throw $this->createNotFoundException('Programme not found');
        }

        $hasUserReviewed = $avisRepository->hasUserReviewedProgram($user, $programme);

        // Sélectionner le template en fonction du rôle
        $template = $user->getRole() === 'ADMIN' 
            ? 'programmebienetre/show.html.twig' 
            : 'programmebienetre/user_show.html.twig';

        return $this->render($template, [
            'programme' => $programme,
            'programmebienetre' => $programme, // Pour compatibilité avec les deux templates
            'user' => $user,
            'has_user_reviewed' => $hasUserReviewed
        ]);
    }

    #[Route('/programmebienetre/{idprogramme}/edit', name: 'app_programmebienetre_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request,
        $idprogramme,
        EntityManagerInterface $em,
        SessionInterface $session
    ): Response {
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        $userId = $session->get('id');
        $user = $em->getRepository(User::class)->find($userId);
        
        // Manually fetch the program entity
        $programmebienetre = $em->getRepository(Programmebienetre::class)->find($idprogramme);
        
        if (!$programmebienetre) {
            throw $this->createNotFoundException('Programme not found');
        }

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
    public function delete(
        Request $request, 
        $idprogramme, 
        EntityManagerInterface $em
    ): Response {
        // Manually fetch the program entity
        $programmebienetre = $em->getRepository(Programmebienetre::class)->find($idprogramme);
        
        if (!$programmebienetre) {
            throw $this->createNotFoundException('Programme not found');
        }
        
        if ($this->isCsrfTokenValid('delete' . $programmebienetre->getIdprogramme(), $request->request->get('_token'))) {
            $em->remove($programmebienetre);
            $em->flush();
        }

        return $this->redirectToRoute('app_programmebienetre_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/programme/search', name: 'programme_search', methods: ['GET'])]
    public function search(
        Request $request, 
        ProgrammebienetreRepository $programmeRepo, 
        AvisRepository $avisRepository,
        SessionInterface $session
    ): JsonResponse {
        if (!$session->get('id')) {
            return new JsonResponse(['error' => 'Unauthorized'], Response::HTTP_UNAUTHORIZED);
        }

        $searchTerm = $request->query->get('q', '');
        
        $programmes = $programmeRepo->createQueryBuilder('p')
            ->leftJoin('p.iduser', 'u')
            ->addSelect('u')
            ->where('LOWER(p.titre) LIKE :search OR LOWER(p.description) LIKE :search')
            ->setParameter('search', '%' . strtolower($searchTerm) . '%')
            ->getQuery()
            ->getResult();
        
        $data = array_map(function ($programme) use ($avisRepository) {
            // Calcul de la moyenne des notes
            $avis = $avisRepository->findBy(['programme' => $programme]);
            $totalRatings = 0;
            $count = count($avis);
            
            foreach ($avis as $avi) {
                $totalRatings += $avi->getRating();
            }
            
            $averageRating = $count > 0 ? round($totalRatings / $count, 1) : 0;
    
            return [
                'idprogramme' => $programme->getIdprogramme(),
                'titre' => $programme->getTitre(),
                'type' => $programme->getType(),
                'description' => $programme->getDescription(),
                'averageRating' => $averageRating,
                'iduser' => $programme->getIduser() ? [
                    'nom' => $programme->getIduser()->getNom(),
                    'prenom' => $programme->getIduser()->getPrenom()
                ] : null,
                'dateProgramme' => $programme->getDateProgramme() ? $programme->getDateProgramme()->format('Y-m-d') : null
            ];
        }, $programmes);
        
        return new JsonResponse($data);
    }
}