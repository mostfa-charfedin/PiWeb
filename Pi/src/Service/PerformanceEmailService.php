<?php

namespace App\Service;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Twig\Environment;

class PerformanceEmailService
{
    private MailerInterface $mailer;
    private Environment $twig;

    public function __construct(
        MailerInterface $mailer,
        Environment $twig
    ) {
        $this->mailer = $mailer;
        $this->twig = $twig;
    }

    public function sendPerformanceStatistics(array $evaluations, array $resourceTitles, string $adminEmail): void
    {
        $avgScore = array_reduce($evaluations, fn($sum, $eval) => $sum + $eval->getNote(), 0) / count($evaluations);
        $highestScore = max(array_map(fn($eval) => $eval->getNote(), $evaluations));
        $lowestScore = min(array_map(fn($eval) => $eval->getNote(), $evaluations));
        
        $email = (new Email())
            ->from('noreply@yourdomain.com')
            ->to($adminEmail)
            ->subject('Resource Performance Statistics Report')
            ->html($this->twig->render('email/performance_statistics.html.twig', [
                'evaluations' => $evaluations,
                'resourceTitles' => $resourceTitles,
                'avgScore' => $avgScore,
                'highestScore' => $highestScore,
                'lowestScore' => $lowestScore,
                'totalResources' => count($evaluations)
            ]));

        $this->mailer->send($email);
    }
} 