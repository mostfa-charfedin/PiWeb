<?php

namespace App\Controller;

use App\Entity\Question;
use App\Entity\Quiz;
use App\Entity\User;
use App\Form\QuestionType;
use App\Repository\QuestionRepository;
use App\Repository\QuizRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    // Route for creating a new question for a specific quiz
    #[Route('/quiz/{quizId}/question/new', name: 'question_new', requirements: ['quizId' => '\d+'])]
    public function new(
        int $quizId,
        Request $request,
        QuizRepository $quizRepository,
        EntityManagerInterface $em,
        SessionInterface $session
    ): Response {
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        $userId = $session->get('id');
        $user = $em->getRepository(User::class)->find($userId);

        $quiz = $quizRepository->find($quizId);
        if (!$quiz) {
            throw $this->createNotFoundException('Quiz not found');
        }

        $question = new Question();
        $question->setQuiz($quiz);

        $form = $this->createForm(QuestionType::class, $question);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($question);
            $em->flush();

            return $this->redirectToRoute('quiz_show', ['id' => $quizId]);
        }

        return $this->render('integration/question_form.html.twig', [
            'formQuestion' => $form->createView(),
            'edit_mode' => false,
            'user' => $user,
            'quiz' => $quiz,
        ]);
    }

    // Route for editing a question
    #[Route('/question/{id}/edit', name: 'question_edit', requirements: ['id' => '\d+'])]
    public function edit(
        int $id,
        Request $request,
        QuestionRepository $questionRepository,
        EntityManagerInterface $em,
        SessionInterface $session
    ): Response {
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        $userId = $session->get('id');
        $user = $em->getRepository(User::class)->find($userId);

        $question = $questionRepository->find($id);
        if (!$question) {
            throw $this->createNotFoundException('Question not found');
        }

        $form = $this->createForm(QuestionType::class, $question);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();

            return $this->redirectToRoute('quiz_show', [
                'id' => $question->getQuiz()->getId()
            ]);
        }

        return $this->render('integration/question_form.html.twig', [
            'formQuestion' => $form->createView(),
            'edit_mode' => true,
            'user' => $user,
            'quiz' => $question->getQuiz(),
        ]);
    }

    // Route for deleting a question
    #[Route('/question/{id}/delete', name: 'question_delete', requirements: ['id' => '\d+'])]
    public function delete(
        int $id,
        QuestionRepository $questionRepository,
        EntityManagerInterface $em,
        SessionInterface $session
    ): Response {
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        $userId = $session->get('id');
        $user = $em->getRepository(User::class)->find($userId);

        $question = $questionRepository->find($id);
        if (!$question) {
            throw $this->createNotFoundException('Question not found');
        }

        $quizId = $question->getQuiz()->getId();

        $em->remove($question);
        $em->flush();

        return $this->redirectToRoute('quiz_show', ['id' => $quizId]);
    }
}