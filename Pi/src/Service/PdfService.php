<?php

namespace App\Service;

use Dompdf\Dompdf;
use Dompdf\Options;


class PdfService
{
    public function __construct(private Environment $twig, private Dompdf $pdf) {}
    public function generateQuizResultPdf(User $user, Quiz $quiz, array $result, array $questions, array $selectedAnswersMap): string
{
    $html = $this->twig->render('pdf/quiz_certificate.html.twig', [
        'user' => $user,
        'quiz' => $quiz,
        'score' => $result['score'],
        'total' => $result['total'],
        'questions' => $questions,
        'selectedAnswersMap' => $selectedAnswersMap,
    ]);

    return $this->pdf->getOutputFromHtml($html);
}

    private function renderQuizResultHtml($quiz, $user, $score)
    {
        // Here, you can use Twig to render a detailed HTML content for the PDF
        // Example of rendering a basic HTML structure, customize it as needed.
        return "
        <html>
            <head>
                <style>
                    body { font-family: Arial, sans-serif; }
                    .certificate { text-align: center; font-size: 24px; margin-top: 50px; }
                    .details { margin-top: 20px; }
                </style>
            </head>
            <body>
                <div class='certificate'>
                    <h2>Certificate of Completion</h2>
                    <p>Congratulations <strong>{$user->getName()}</strong>!</p>
                    <p>You have completed the quiz <strong>{$quiz->getNom()}</strong></p>
                    <p>Score: <strong>{$score}</strong></p>
                </div>
                <div class='details'>
                    <p><strong>Quiz Title:</strong> {$quiz->getNom()}</p>
                    <p><strong>Completion Date:</strong> {$score->getCompletionDate()}</p>
                </div>
            </body>
        </html>
        ";
    }
}
