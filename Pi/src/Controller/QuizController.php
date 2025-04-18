<?php

namespace App\Controller;

use App\Entity\Quiz;
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

class QuizController extends AbstractController
{
    #[Route('/quiz', name: 'app_home', methods: ['GET'])]
    public function index(
        QuizRepository $quizRepository,
        SessionInterface $session,
        EntityManagerInterface $em
    ): Response {
        $userId = $session->get('id');
        if (!$userId) return $this->redirectToRoute('login');

        $user = $em->getRepository(User::class)->find($userId);
        if (!$user) throw $this->createNotFoundException('User not found');

        $quizzes = $quizRepository->findAll();
        $quizResults = $session->get('quiz_result_history', []);
        $role = strtoupper($user->getRole() ?? '');

        $template = $role === 'ADMIN' ? 'quiz/ListQuiz.html.twig' : 'quiz/quiz_list_user.html.twig';

        return $this->render($template, [
            'quizzes' => $quizzes,
            'user' => $user,
            'quizResults' => $quizResults,
        ]);
    }

    #[Route('/quiz/new', name: 'quiz_new')]
    public function new(
        Request $request,
        EntityManagerInterface $em,
        SessionInterface $session,
        MailerInterface $mailer
    ): Response {
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

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

            $users = $em->getRepository(User::class)->findAll();
            foreach ($users as $recipient) {
                $email = (new Email())
                    ->from('admin@example.com')
                    ->to($recipient->getEmail())
                    ->subject('New Quiz Available!')
                    ->text("Hello {$recipient->getNom()},\n\nA new quiz titled '{$quiz->getNom()}' has been added. Go check it out!");

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

    #[Route('/quiz/{id}', name: 'quiz_show', methods: ['GET'], requirements: ['id' => '\\d+'])]
    public function show(
        int $id,
        QuizRepository $quizRepository,
        QuestionRepository $questionRepository,
        SessionInterface $session,
        EntityManagerInterface $em
    ): Response {
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

        $template = strtoupper($user->getRole() ?? '') === 'ADMIN'
            ? 'quiz/QuizShow.html.twig'
            : 'quiz/quiz_take.html.twig';

        return $this->render($template, [
            'quiz' => $quiz,
            'questions' => $questions,
            'user' => $user,
        ]);
    }

    #[Route('/quiz/{id}/edit', name: 'quiz_edit', methods: ['GET', 'POST'], requirements: ['id' => '\\d+'])]
    public function edit(
        int $id,
        Request $request,
        QuizRepository $quizRepository,
        EntityManagerInterface $em,
        SessionInterface $session
    ): Response {
        $userId = $session->get('id');
        if (!$userId) return $this->redirectToRoute('login');

        $user = $em->getRepository(User::class)->find($userId);
        $quiz = $quizRepository->find($id);
        if (!$quiz) throw $this->createNotFoundException('Quiz not found');

        $form = $this->createForm(QuizType::class, $quiz);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            return $this->redirectToRoute('app_home');
        }

        return $this->render('quiz/QuizForm.html.twig', [
            'formQuiz' => $form->createView(),
            'edit_mode' => true,
            'user' => $user,
        ]);
    }

    #[Route('/quiz/{id}/delete', name: 'quiz_delete', methods: ['POST'], requirements: ['id' => '\\d+'])]
    public function delete(
        Request $request,
        int $id,
        QuizRepository $quizRepository,
        EntityManagerInterface $em,
        CsrfTokenManagerInterface $csrfTokenManager,
        SessionInterface $session
    ): Response {
        $userId = $session->get('id');
        if (!$userId) return $this->redirectToRoute('login');

        $quiz = $quizRepository->find($id);
        if (!$quiz) throw $this->createNotFoundException('Quiz not found');

        $tokenId = 'delete' . $quiz->getIdquiz();
        $submittedToken = $request->request->get('_token');

        if (!$csrfTokenManager->isTokenValid(new CsrfToken($tokenId, $submittedToken))) {
            throw $this->createAccessDeniedException('Invalid CSRF token');
        }

        $em->remove($quiz);
        $em->flush();

        return $this->redirectToRoute('app_home');
    }

    #[Route('/user/quiz/{id}/start', name: 'user_quiz_start', methods: ['GET'], requirements: ['id' => '\\d+'])]
    public function startQuiz(
        int $id,
        QuizRepository $quizRepository,
        QuestionRepository $questionRepository,
        SessionInterface $session,
        EntityManagerInterface $em
    ): Response {
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
    public function submitQuiz(
        Request $request,
        QuizRepository $quizRepository,
        EntityManagerInterface $em,
        int $id,
        SessionInterface $session
    ): Response {
        $quiz = $quizRepository->find($id);
        if (!$quiz) throw $this->createNotFoundException("Quiz not found.");

        $questions = $quiz->getQuestions();
        $score = 0;
        $totalQuestions = count($questions);
        $userAnswers = [];

        foreach ($questions as $question) {
            $questionId = $question->getIdQuestion();
            $responseId = $request->request->get("question_$questionId");

            if ($responseId) {
                $userAnswers["question_$questionId"] = $responseId;
                $response = $em->getRepository(Reponse::class)->find($responseId);

                if ($response && $response->getStatus() === 'correct') {
                    $score++;
                }
            }
        }

        $session->set('quiz_result', [
            'quiz' => $quiz->getNom(),
            'score' => $score,
            'total' => $totalQuestions
        ]);

        $quizResults = $session->get('quiz_result_history', []);
        $quizResults[$quiz->getIdQuiz()] = [
            'score' => $score,
            'total' => $totalQuestions,
        ];

        $session->set('quiz_result_history', $quizResults);
        $session->set('user_answers', $userAnswers);

        return $this->redirectToRoute('user_quiz_result', ['id' => $quiz->getIdQuiz()]);
    }

    #[Route('/quiz/{id}/result', name: 'user_quiz_result')]
    public function quizResult(
        SessionInterface $session,
        EntityManagerInterface $em,
        QuizRepository $quizRepository,
        QuestionRepository $questionRepository,
        int $id
    ): Response {
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
}
