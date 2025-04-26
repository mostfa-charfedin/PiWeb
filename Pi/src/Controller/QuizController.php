<?php

namespace App\Controller;

use App\Entity\Quiz;
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

class QuizController extends AbstractController
{
    #[Route('/quiz', name: 'app_home')]
    public function list(QuizRepository $quizRepository, SessionInterface $session, EntityManagerInterface $em): Response
    {
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        $user = $em->getRepository(User::class)->find($session->get('id'));

        return $this->render('quiz/ListQuiz.html.twig', [
            'quizzes' => $quizRepository->findAll(),
            'user' => $user,
        ]);
    }

    #[Route('/quiz/new', name: 'quiz_new')]
    public function new(Request $request, EntityManagerInterface $em, SessionInterface $session): Response
    {
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
            return $this->redirectToRoute('app_home');
        }

        return $this->render('quiz/QuizForm.html.twig', [
            'formQuiz' => $form->createView(),
            'edit_mode' => false,
            'user' => $user,
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

    #[Route('/quiz/{id}/delete', name: 'quiz_delete', methods: ['POST'])]
    public function delete(Request $request, int $id, QuizRepository $quizRepository, EntityManagerInterface $em, CsrfTokenManagerInterface $csrfTokenManager, SessionInterface $session): Response
    {
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        $quiz = $quizRepository->find($id);
        if (!$quiz) {
            throw $this->createNotFoundException('Quiz not found');
        }

        $submittedToken = $request->request->get('_token');
        $tokenId = 'delete' . $quiz->getIdquiz();

        if (!$csrfTokenManager->isTokenValid(new CsrfToken($tokenId, $submittedToken))) {
            throw $this->createAccessDeniedException('Invalid CSRF token');
        }

        $em->remove($quiz);
        $em->flush();

        return $this->redirectToRoute('app_home');
    }
}