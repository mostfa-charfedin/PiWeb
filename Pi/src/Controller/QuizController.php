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
    
    private HttpClientInterface $client;
    private string $googleApiKey;
    private EntityManagerInterface $entityManager; 
    
public function __construct(HttpClientInterface $client,EntityManagerInterface $entityManager)
{
    $this->client = $client;
    $this->googleApiKey = 'AIzaSyBOti4mM-6x9WDnZIjIeyEU21OpBXqWBgw'; 
    $this->entityManager = $entityManager; // Assign EntityManager
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
        $quizzes = array_filter($quizzes, fn($quiz) => !in_array($quiz->getIdquiz(), $hiddenIds));
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

    #[Route('/quiz/{id}/start', name: 'user_quiz_start', methods: ['GET'], requirements: ['id' => '\\d+'])]
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
        $quizResults[$quiz->getIdquiz()] = [
            'score' => $score,
            'total' => count($questions),
        ];
        $session->set('quiz_result_history', $quizResults);
        $session->set('user_answers', $userAnswers);
    
        // ✅ Save score to JSON file
        $userId = $session->get('id') ?? null;
        $scoreData = [
            'user_id' => $userId,
            'score' => $score,
            'total' => count($questions),
            'timestamp' => time()
        ];
    
        $dir = $this->getParameter('kernel.project_dir') . '/var/quiz_scores';
        if (!is_dir($dir)) mkdir($dir, 0777, true);
    
        $filePath = $dir . "/quiz_{$quiz->getIdquiz()}.json";
        $existingData = [];
    
        if (file_exists($filePath)) {
            $existingData = json_decode(file_get_contents($filePath), true) ?? [];
        }
    
        $existingData[] = $scoreData;
        file_put_contents($filePath, json_encode($existingData, JSON_PRETTY_PRINT));
    
        return $this->redirectToRoute('user_quiz_result', ['id' => $quiz->getIdquiz()]);
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


    #[Route('/admin/quiz/{id}/stats', name: 'admin_quiz_stats')]
    public function adminQuizStats(
        int $id, 
        QuizRepository $quizRepository,
        SessionInterface $session, 
        EntityManagerInterface $em,
        QuestionRepository $questionRepository
    ): Response {
        // Check admin session
        $userId = $session->get('id');
        if (!$userId) {
            return $this->redirectToRoute('login');
        }
    
        $user = $em->getRepository(User::class)->find($userId);
        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }
    
        // Get quiz data
        $quiz = $quizRepository->find($id);
        if (!$quiz) {
            throw $this->createNotFoundException('Quiz not found');
        }
    
        // Get all questions for this quiz
        $questions = $questionRepository->createQueryBuilder('q')
            ->leftJoin('q.reponses', 'r')
            ->addSelect('r')
            ->where('q.quiz = :quiz')
            ->setParameter('quiz', $quiz)
            ->getQuery()
            ->getResult();
    
        // Load quiz attempts
        $filePath = $this->getParameter('kernel.project_dir') . "/var/quiz_scores/quiz_{$id}.json";
        if (!file_exists($filePath)) {
            return $this->render('quiz/AdminStats.html.twig', [
                'quiz' => $quiz,
                'questions' => $questions,
                'passed' => 0,
                'failed' => 0,
                'average' => 0,
                'total' => 0,
                'successRate' => 0,
                'failureRate' => 0,
                'user' => $user,
                'userAttempts' => [],
                'recentAttempts' => [],
                'answerDistribution' => []
            ]);
        }
    
        $scores = json_decode(file_get_contents($filePath), true) ?? [];
        $total = count($scores);
        $passed = 0;
        $sum = 0;
        
        // Additional statistics
        $userAttempts = [];
        $recentAttempts = array_slice($scores, -5); // Last 5 attempts
        $answerDistribution = []; // Track how often each answer was selected
    
        foreach ($scores as $entry) {
            $score = $entry['score'];
            $quizTotal = $entry['total'] ?? 1;
            $sum += $score;
    
            // Pass/fail calculation
            $passingScore = $quizTotal / 2;
            if ($score >= $passingScore) {
                $passed++;
            }
    
            // Track user attempts
            if (isset($entry['user_id'])) {
                $userId = $entry['user_id'];
                $userAttempts[$userId] = ($userAttempts[$userId] ?? 0) + 1;
            }
    
            // Track answer distribution (if available)
            if (isset($entry['answers'])) {
                foreach ($entry['answers'] as $questionId => $answerId) {
                    if (!isset($answerDistribution[$questionId])) {
                        $answerDistribution[$questionId] = [];
                    }
                    $answerDistribution[$questionId][$answerId] = ($answerDistribution[$questionId][$answerId] ?? 0) + 1;
                }
            }
        }
    
        // Hydrate recent attempts with user data
        $hydratedRecentAttempts = [];
        foreach ($recentAttempts as $attempt) {
            $attemptUser = $em->getRepository(User::class)->find($attempt['user_id'] ?? null);
            if ($attemptUser) {
                $hydratedRecentAttempts[] = [
                    'user' => $attemptUser,
                    'score' => $attempt['score'],
                    'total' => $attempt['total'] ?? 1,
                    'timestamp' => $attempt['timestamp'] ?? null,
                    'passed' => $attempt['score'] >= ($attempt['total'] ?? 1) / 2,
                    'answers' => $attempt['answers'] ?? []
                ];
            }
        }
    
        // Calculate statistics
        $average = $total > 0 ? round($sum / $total, 2) : 0;
        $successRate = $total > 0 ? round(($passed / $total) * 100, 2) : 0;
        $failureRate = 100 - $successRate;
    
        return $this->render('quiz/AdminStats.html.twig', [
            'quiz' => $quiz,
            'questions' => $questions,
            'passed' => $passed,
            'failed' => $total - $passed,
            'average' => $average,
            'total' => $total,
            'successRate' => $successRate,
            'failureRate' => $failureRate,
            'user' => $user,
            'userAttempts' => $userAttempts,
            'recentAttempts' => $hydratedRecentAttempts,
            'answerDistribution' => $answerDistribution,
            'totalUsers' => count($userAttempts)
        ]);
    }
#[Route('/user/stats', name: 'user_stats')]
public function userStats(SessionInterface $session, EntityManagerInterface $em, QuizRepository $quizRepository): Response
{
    $userId = $session->get('id');
    if (!$userId) {
        return $this->redirectToRoute('login');
    }

    $user = $em->getRepository(User::class)->find($userId);
    if (!$user) {
        throw $this->createNotFoundException('User not found');
    }

    $quizDir = $this->getParameter('kernel.project_dir') . '/var/quiz_scores';
    $scores = [];

    if (is_dir($quizDir)) {
        foreach (glob($quizDir . '/quiz_*.json') as $filePath) {
            $quizId = (int)filter_var(basename($filePath), FILTER_SANITIZE_NUMBER_INT);
            $quiz = $quizRepository->find($quizId);
            if (!$quiz) continue;

            $entries = json_decode(file_get_contents($filePath), true);
            if (!$entries) continue;

            // Get all submissions by the current user
            $userEntries = array_filter($entries, fn($e) => $e['user_id'] == $userId);

            // Get latest attempt (or average if you want)
            if (!empty($userEntries)) {
                usort($userEntries, fn($a, $b) => $b['timestamp'] <=> $a['timestamp']); // Latest first
                $latest = $userEntries[0];
                $scores[] = [
                    'quiz' => $quiz,
                    'score' => $latest['score'],
                    'total' => $latest['total'],
                ];
            }
        }
    }

    return $this->render('quiz/UserStats.html.twig', [
        'user' => $user,
        'scores' => $scores,
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

    // Translate the question text
    $translatedQuestion = $this->translateTextWithGoogle($question->getQuestion(), $lang);

    // Translate all the responses
    $translatedResponses = [];
    foreach ($question->getReponses() as $response) {
        $translatedResponses[] = $this->translateTextWithGoogle($response->getResponse(), $lang);
    }

    return new JsonResponse([
        'success' => true,
        'question' => $translatedQuestion,
        'responses' => $translatedResponses,
    ]);
}

private function translateTextWithGoogle(string $text, string $targetLang): string
{
    $url = 'https://translation.googleapis.com/language/translate/v2';

    try {
        $response = $this->client->request('POST', $url, [
            'query' => [
                'key' => $this->googleApiKey,
            ],
            'json' => [
                'q' => $text,
                'target' => $targetLang,
                'format' => 'text',
            ],
        ]);

        $data = $response->toArray();

        if (isset($data['data']['translations'][0]['translatedText'])) {
            return $data['data']['translations'][0]['translatedText'];
        }

        return $text; // fallback if translation fails
    } catch (\Exception $e) {
        return $text; // fallback if any error
    }
}

}

