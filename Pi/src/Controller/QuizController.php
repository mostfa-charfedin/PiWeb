<?php

namespace App\Controller;

use App\Entity\Quiz;
use App\Entity\Score;
use App\Entity\Reponse;
use App\Entity\User;
use App\Form\QuizType;
use App\Repository\QuizRepository;
use App\Repository\QuestionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Symfony\Component\Security\Csrf\CsrfToken;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Knp\Snappy\Pdf;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Contracts\Translation\TranslatorInterface;


class QuizController extends AbstractController
{
    private HttpClientInterface $httpClient;

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    #[Route('/quiz', name: 'app_home', methods: ['GET'])]
public function index(Request $request, QuizRepository $quizRepository, SessionInterface $session, EntityManagerInterface $em): Response
{
    $userId = $session->get('id');
    if (!$userId) return $this->redirectToRoute('login');

    $user = $em->getRepository(User::class)->find($userId);
    if (!$user) throw $this->createNotFoundException('User not found');

    $searchTerm = $request->query->get('search', '');
    $quizzes = !empty($searchTerm)
        ? $quizRepository->createQueryBuilder('q')
            ->where('LOWER(q.nom) LIKE :search')
            ->setParameter('search', '%' . strtolower($searchTerm) . '%')
            ->getQuery()
            ->getResult()
        : $quizRepository->findAll();

    // Load hidden quizzes
    $file = __DIR__ . '/../../config/hidden_quizzes.json';
    $hiddenIds = file_exists($file) ? json_decode(file_get_contents($file), true) : [];

    // Filter hidden quizzes if not admin
    $role = strtoupper($user->getRole() ?? '');
    if ($role !== 'ADMIN') {
        $quizzes = array_filter($quizzes, fn($quiz) => !in_array($quiz->getIdQuiz(), $hiddenIds));
    }

    $quizResults = $session->get('quiz_result_history', []);
    $template = $role === 'ADMIN' ? 'quiz/ListQuiz.html.twig' : 'quiz/quiz_list_user.html.twig';

    return $this->render($template, [
        'quizzes' => $quizzes,
        'user' => $user,
        'quizResults' => $quizResults,
        'searchTerm' => $searchTerm,
        'hiddenIds' => $hiddenIds, // 💡 needed for admin to toggle buttons
    ]);
}
    #[Route('/quiz/search', name: 'quiz_search')]
    public function search(Request $request, QuizRepository $quizRepository, CsrfTokenManagerInterface $csrfTokenManager): JsonResponse
    {
        $searchTerm = $request->query->get('search', '');
        $quizzes = $quizRepository->createQueryBuilder('q')
            ->where('q.nom LIKE :search')
            ->setParameter('search', '%' . $searchTerm . '%')
            ->getQuery()
            ->getResult();
    
        $data = array_map(function ($quiz) use ($csrfTokenManager) {
            return [
                'idquiz' => $quiz->getIdquiz(),
                'nom' => $quiz->getNom(),
                'datecreation' => $quiz->getDatecreation()?->format('Y-m-d H:i') ?? 'N/A',
                'csrf_token' => $csrfTokenManager->getToken('delete' . $quiz->getIdquiz())->getValue(),
            ];
        }, $quizzes);
    
        return new JsonResponse($data);
    }

    #[Route('/quiz/new', name: 'quiz_new')]
    public function new(Request $request, EntityManagerInterface $em, SessionInterface $session, MailerInterface $mailer): Response
    {
        if (!$session->get('id')) return $this->redirectToRoute('login');

        $user = $em->getRepository(User::class)->find($session->get('id'));
        $quiz = new Quiz();

        if (method_exists($quiz, 'setUser')) {
            $quiz->setUser($user);
        }

        $form = $this->createForm(QuizType::class, $quiz);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($quiz);
            $em->flush();

            foreach ($em->getRepository(User::class)->findAll() as $recipient) {
                $email = (new Email())
                    ->from('admin@example.com')
                    ->to($recipient->getEmail())
                    ->subject('New Quiz Available!')
                    ->text("Hello {$recipient->getNom()},\n\nA new quiz titled '{$quiz->getNom()}' has been added.");

                $mailer->send($email);
            }

            return $this->redirectToRoute('app_home');
        }

        return $this->render('quiz/QuizForm.html.twig', [
            'formQuiz' => $form->createView(),
            'edit_mode' => false,
            'user' => $user,
        ]);
    }

    #[Route('/quiz/{id}', name: 'quiz_show', requirements: ['id' => '\d+'])]
    public function show(int $id, QuizRepository $quizRepository, QuestionRepository $questionRepository, SessionInterface $session, EntityManagerInterface $em): Response
    {
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        $quiz = $quizRepository->find($id);
        if (!$quiz) {
            throw $this->createNotFoundException('Quiz not found');
        }

        // Fetch questions from repository or rely on Quiz.questions
        $questions = $questionRepository->findBy(['quiz' => $quiz]);

        return $this->render('quiz/QuizShow.html.twig', [
            'quiz' => $quiz,
            'questions' => $questions,
            'user' => $em->getRepository(User::class)->find($session->get('id')),
        ]);
    }

    #[Route('/quiz/{id}/edit', name: 'quiz_edit', requirements: ['id' => '\d+'])]
    public function edit(int $id, Request $request, QuizRepository $quizRepository, EntityManagerInterface $em, SessionInterface $session): Response
    {
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        $quiz = $quizRepository->find($id);
        if (!$quiz) {
            throw $this->createNotFoundException('Quiz not found');
        }

        $form = $this->createForm(QuizType::class, $quiz);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            return $this->redirectToRoute('app_home');
        }

        return $this->render('quiz/QuizForm.html.twig', [
            'formQuiz' => $form->createView(),
            'edit_mode' => true,
            'user' => $em->getRepository(User::class)->find($session->get('id')),
        ]);
    }

    #[Route('/quiz/hide/{id}', name: 'quiz_hide', methods: ['POST'])]
public function hideQuiz(int $id, SessionInterface $session): Response
{
    $userRole = strtoupper($session->get('role', ''));
    if ($userRole !== 'ADMIN') {
        throw $this->createAccessDeniedException('Only admins can hide quizzes.');
    }

    $file = __DIR__ . '/../../config/hidden_quizzes.json';
    $hiddenIds = file_exists($file) ? json_decode(file_get_contents($file), true) : [];

    if (!in_array($id, $hiddenIds)) {
        $hiddenIds[] = $id;
        file_put_contents($file, json_encode($hiddenIds));
    }

    return $this->redirectToRoute('app_home');
}
#[Route('/quiz/unhide/{id}', name: 'quiz_unhide', methods: ['POST'])]
public function unhideQuiz(int $id, SessionInterface $session): Response
{
    $userRole = strtoupper($session->get('role', ''));
    if ($userRole !== 'ADMIN') {
        throw $this->createAccessDeniedException('Only admins can unhide quizzes.');
    }

    $file = __DIR__ . '/../../config/hidden_quizzes.json';
    $hiddenIds = file_exists($file) ? json_decode(file_get_contents($file), true) : [];

    $hiddenIds = array_filter($hiddenIds, fn($qid) => $qid != $id);
    file_put_contents($file, json_encode(array_values($hiddenIds)));

    return $this->redirectToRoute('app_home');
}


    #[Route('/quiz/{id}/delete', name: 'quiz_delete', methods: ['POST'], requirements: ['id' => '\\d+'])]
    public function delete(Request $request, int $id, QuizRepository $quizRepository, EntityManagerInterface $em, CsrfTokenManagerInterface $csrfTokenManager): Response
    {
        $quiz = $quizRepository->find($id);
        if (!$quiz) throw $this->createNotFoundException('Quiz not found');

        $submittedToken = $request->request->get('_token');
        $tokenId = 'delete' . $quiz->getIdquiz();

        if (!$csrfTokenManager->isTokenValid(new CsrfToken($tokenId, $submittedToken))) {
            throw $this->createAccessDeniedException('Invalid CSRF token');
        }

        $em->remove($quiz);
        $em->flush();

        return $this->redirectToRoute('app_home');
    }

    #[Route('/user/quiz/{id}/start', name: 'user_quiz_start', methods: ['GET'], requirements: ['id' => '\\d+'])]
    public function startQuiz(int $id, QuizRepository $quizRepository, QuestionRepository $questionRepository, SessionInterface $session, EntityManagerInterface $em): Response
    {
        $userId = $session->get('id');
        if (!$userId) return $this->redirectToRoute('login');

        $user = $em->getRepository(User::class)->find($userId);
        $quiz = $quizRepository->find($id);
        if (!$quiz) throw $this->createNotFoundException('Quiz not found');

        $questions = $questionRepository->createQueryBuilder('q')
            ->leftJoin('q.reponses', 'r')
            ->addSelect('r')
            ->where('q.quiz = :quiz')
            ->setParameter('quiz', $quiz)
            ->getQuery()
            ->getResult();

        return $this->render('quiz/quiz_take.html.twig', [
            'quiz' => $quiz,
            'questions' => $questions,
            'user' => $user,
        ]);
    }

    #[Route('/quiz/{id}/submit', name: 'user_quiz_submit', methods: ['POST'])]
public function submitQuiz(Request $request, QuizRepository $quizRepository, EntityManagerInterface $em, int $id, SessionInterface $session): Response
{
    $quiz = $quizRepository->find($id);
    if (!$quiz) throw $this->createNotFoundException("Quiz not found.");

    $questions = $quiz->getQuestions();
    $score = 0;
    $userAnswers = [];

    foreach ($questions as $question) {
        $questionId = $question->getIdQuestion();
        $responseId = $request->request->get("question_$questionId");

        if ($responseId) {
            $userAnswers["question_$questionId"] = $responseId;
            $response = $em->getRepository(Reponse::class)->find($responseId);
            if ($response && $response->getStatus() === 'correct') $score++;
        }
    }

    $session->set('quiz_result', [
        'quiz' => $quiz->getNom(),
        'score' => $score,
        'total' => count($questions)
    ]);

    $quizResults = $session->get('quiz_result_history', []);
    $quizResults[$quiz->getIdQuiz()] = [
        'score' => $score,
        'total' => count($questions),
    ];

    $session->set('quiz_result_history', $quizResults);
    $session->set('user_answers', $userAnswers);

    // 🆕 Save the score into the database
    $scoreEntity = new Score();
    $scoreEntity->setScore($score);
    $scoreEntity->setQuiz($quiz);

    $userId = $session->get('user')['id'] ?? null;
    if ($userId) {
        $user = $em->getRepository(User::class)->find($userId);
        if ($user) {
            $scoreEntity->setUser($user);
            $em->persist($scoreEntity);
            $em->flush();
        }
    }

    return $this->redirectToRoute('user_quiz_result', ['id' => $quiz->getIdQuiz()]);
}


    #[Route('/quiz/{id}/result', name: 'user_quiz_result')]
    public function quizResult(SessionInterface $session, EntityManagerInterface $em, QuizRepository $quizRepository, QuestionRepository $questionRepository, int $id): Response
    {
        $userId = $session->get('id');
        if (!$userId) return $this->redirectToRoute('login');

        $user = $em->getRepository(User::class)->find($userId);
        $quiz = $quizRepository->find($id);
        $result = $session->get('quiz_result');
        $userAnswers = $session->get('user_answers', []);

        if (!$result || !$quiz) {
            return $this->redirectToRoute('app_home');
        }

        $questions = $questionRepository->createQueryBuilder('q')
            ->leftJoin('q.reponses', 'r')
            ->addSelect('r')
            ->where('q.quiz = :quiz')
            ->setParameter('quiz', $quiz)
            ->getQuery()
            ->getResult();

        $selectedAnswersMap = [];
        foreach ($userAnswers as $key => $value) {
            if (str_starts_with($key, 'question_')) {
                $questionId = (int)str_replace('question_', '', $key);
                $selectedAnswersMap[$questionId] = (int)$value;
            }
        }

        return $this->render('quiz/result.html.twig', [
            'quiz' => $quiz,
            'quizName' => $result['quiz'],
            'score' => $result['score'],
            'total' => $result['total'],
            'user' => $user,
            'questions' => $questions,
            'selectedAnswersMap' => $selectedAnswersMap,
        ]);
    }


   // ADMIN - Voir les stats d'un quiz spécifique
   #[Route('/admin/quiz/{id}/stats', name: 'admin_quiz_stats')]
   public function adminQuizStats(int $id, EntityManagerInterface $em, QuizRepository $quizRepository): Response
   {
       // Récupérer le quiz
       $quiz = $quizRepository->find($id);
       if (!$quiz) {
           throw $this->createNotFoundException('Quiz not found');
       }

       // Récupérer les scores associés à ce quiz
       $scores = $em->getRepository(Score::class)->findBy(['IdQuiz' => $quiz]);

       $total = count($scores);
       $passed = 0;
       $failed = 0;
       $sum = 0;

       // Définir une note minimale pour réussir (par exemple, 50%)
       $maxScore = 10;
       $passingScore = $maxScore / 2;

       // Parcourir les scores et compter les réussites/échecs
       foreach ($scores as $score) {
           $sum += $score->getScore();
           if ($score->getScore() >= $passingScore) {
               $passed++;
           } else {
               $failed++;
           }
       }

       // Calcul de la moyenne
       $average = $total > 0 ? round($sum / $total, 2) : 0;
       // Calcul des taux de réussite et d'échec
       $successRate = $total > 0 ? round(($passed / $total) * 100, 2) : 0;
       $failureRate = 100 - $successRate;

       // Retourner la vue avec les données de stats
       return $this->render('quiz/AdminStats.html.twig', [
           'quiz' => $quiz,
           'passed' => $passed,
           'failed' => $failed,
           'average' => $average,
           'total' => $total,
           'successRate' => $successRate,
           'failureRate' => $failureRate,
       ]);
   }

   // USER - Voir ses propres stats
   #[Route('/user/stats', name: 'user_stats')]
   public function userStats(SessionInterface $session, EntityManagerInterface $em): Response
   {
       // Récupérer l'ID utilisateur à partir de la session
       $userId = $session->get('id');
       if (!$userId) {
           return $this->redirectToRoute('login');
       }

       // Récupérer l'utilisateur à partir de l'ID
       $user = $em->getRepository(User::class)->find($userId);
       if (!$user) {
           throw $this->createNotFoundException('User not found');
       }

       // Récupérer tous les scores de cet utilisateur
       $scores = $em->getRepository(Score::class)->findBy(['idUser' => $user]);

       $total = count($scores);
       $sum = array_sum(array_map(fn($s) => $s->getScore(), $scores));
       $average = $total > 0 ? round($sum / $total, 2) : 0;

       // Données pour le graphique (étiquettes et données)
       $chartLabels = [];
       $chartData = [];

       foreach ($scores as $score) {
           if ($score->getIdQuiz()) {
               $chartLabels[] = $score->getIdQuiz()->getName(); // Nom du quiz
               $chartData[] = $score->getScore(); // Score de l'utilisateur pour chaque quiz
           }
       }

       return $this->render('quiz/UserStats.html.twig', [
           'user' => $user,
           'total' => $total,
           'average' => $average,
           'chartLabels' => $chartLabels,
           'chartData' => $chartData,
       ]);
   }
#[Route('/quiz/{id}/certificate', name: 'quiz_download_certificate')]
public function downloadCertificate(
    Pdf $knpSnappyPdf,
    QuizRepository $quizRepository,
    SessionInterface $session,
    EntityManagerInterface $em,
    int $id
): Response {
    $quiz = $quizRepository->find($id);
    $userId = $session->get('id');

    if (!$quiz || !$userId) {
        return $this->redirectToRoute('app_home');
    }

    $user = $em->getRepository(User::class)->find($userId);
    $result = $session->get('quiz_result');

    $html = $this->renderView('quiz/quiz_certificate.html.twig', [
        'quiz' => $quiz,
        'score' => $result['score'],
        'total' => $result['total'],
        'user' => $user,
    ]);

    $pdf = $knpSnappyPdf->getOutputFromHtml($html);

    return new Response($pdf, 200, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'attachment; filename="quiz_result.pdf"',
    ]);
}
/**
 * @Route("/quiz/{id}/translate/{lang}", name="quiz_question_translate")
 */
public function translateQuestion(int $id, string $lang, QuestionRepository $questionRepository): JsonResponse
{
    $question = $questionRepository->find($id);

    if (!$question) {
        return new JsonResponse([
            'success' => false,
            'message' => 'Question not found.',
        ], 404);
    }

    // Dummy translation logic for multiple languages
    $translatedQuestion = $this->getTranslatedText($question->getQuestion(), $lang);

    $translatedResponses = [];
    foreach ($question->getReponses() as $response) {
        $translatedResponses[] = $this->getTranslatedText($response->getResponse(), $lang);
    }

    return new JsonResponse([
        'success' => true,
        'question' => $translatedQuestion,
        'responses' => $translatedResponses,
    ]);
}

// Helper function for translating text based on language
private function getTranslatedText(string $text, string $lang): string
{
    switch ($lang) {
        case 'en': // English
            return $text;
        case 'fr': // French
            return "[fr] " . $text;
        case 'es': // Spanish
            return "[es] " . $text;
        case 'de': // German
            return "[de] " . $text;
        // Add more languages as needed
        default:
            return "[{$lang}] " . $text; // Default translation
    }
}}