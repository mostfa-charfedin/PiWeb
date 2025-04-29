<?php

namespace App\Controller;

use App\Entity\Complaint;
use App\Entity\User;
use App\Form\AdminComplaintType;
use App\Repository\ComplaintRepository;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/complaint')]
class AdminComplaintController extends AbstractController
{
    public function __construct(
        private readonly string $senderEmail = 'souhir.krizi@isimg.tn'
    ) {
    }

    #[Route('/{id}/edit-status', name: 'admin_complaint_edit_status', methods: ['GET', 'POST'])]
    public function editStatus(
        Request $request,
        ?Complaint $complaint,
        EntityManagerInterface $entityManager,
        MailerInterface $mailer,
        LoggerInterface $logger
    ): Response {
        if (!$complaint) {
            $logger->error('Complaint not found for ID: '.$request->attributes->get('id'));
            throw new NotFoundHttpException('Réclamation non trouvée.');
        }

        $form = $this->createForm(AdminComplaintType::class, $complaint);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $complaint->setRespondedBy($this->getUser());
            $entityManager->flush();

            $user = $complaint->getUser();
            $userEmail = $user?->getEmail();

            if (!$this->isValidEmail($userEmail)) {
                $logger->error('Invalid email configuration', [
                    'complaint_id' => $complaint->getId(),
                    'user_id' => $user?->getId(),
                    'email' => $userEmail ?? 'null'
                ]);

                $this->addFlash('warning', 'Statut mis à jour mais email non envoyé: adresse email invalide.');
                return $this->redirectToRoute('app_complaint_index');
            }

            try {
                $this->sendStatusEmail($complaint, $userEmail, $mailer, $logger);
                $this->addFlash('success', 'Statut mis à jour et email envoyé avec succès!');
            } catch (TransportExceptionInterface $e) {
                $logger->critical('Email sending failed', [
                    'error' => $e->getMessage(),
                    'complaint_id' => $complaint->getId(),
                    'recipient' => $userEmail
                ]);

                $this->addFlash(
                    'error',
                    'Statut mis à jour mais échec d\'envoi de l\'email. Veuillez réessayer plus tard.'
                );
            }

            return $this->redirectToRoute('app_complaint_index');
        }

        return $this->render('complaint/admin_edit_status.html.twig', [
            'complaint' => $complaint,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/stats/complaints', name: 'app_complaint_stats', methods: ['GET'])]
    public function stats(
        ComplaintRepository $complaintRepository,
        SessionInterface $session,
        EntityManagerInterface $entityManager
    ): Response {
        $userId = $session->get('id');
        if (!$userId) {
            return $this->redirectToRoute('login');
        }

        $user = $entityManager->getRepository(User::class)->find($userId);
        if (!$user) {
            $session->invalidate();
            return $this->redirectToRoute('login');
        }

        return $this->render('complaint/stats.html.twig', [
            'totalComplaints' => $complaintRepository->count([]),
            'user' => $user,
        ]);
    }

    private function isValidEmail(?string $email): bool
    {
        return $email && filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    private function sendStatusEmail(
        Complaint $complaint,
        string $recipientEmail,
        MailerInterface $mailer,
        LoggerInterface $logger
    ): void {
        $email = (new Email())
            ->from($this->senderEmail)
            ->to($recipientEmail)
            ->subject('Mise à jour du statut de votre réclamation #'.$complaint->getId())
            ->html($this->renderView('emails/complaint_status_update.html.twig', [
                'complaint' => $complaint,
                'statusText' => $complaint->getStatusText(),
            ]));

        $mailer->send($email);

        $logger->info('Email sent successfully', [
            'to' => $recipientEmail,
            'complaint_id' => $complaint->getId(),
            'status' => $complaint->getStatusText()
        ]);
    }
}