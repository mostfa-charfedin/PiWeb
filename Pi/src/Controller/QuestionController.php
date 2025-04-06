<?php

namespace App\Controller;

use App\Entity\Question;
use App\Entity\Quiz;
use App\Form\QuestionType;
use App\Repository\QuestionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/question')]
class QuestionController extends AbstractController
{
    #[Route('/new/{quizId}', name: 'question_create', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, int $quizId): Response
    {
        $quiz = $entityManager->getRepository(Quiz::class)->find($quizId);
        
        if (!$quiz) {
            throw $this->createNotFoundException('Quiz not found');
        }
        
        $question = new Question();
        $question->setQuiz($quiz);
        
        $form = $this->createForm(QuestionType::class, $question);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($question);
            $entityManager->flush();

            $this->addFlash('success', 'Question created successfully.');
            return $this->redirectToRoute('quiz_view', ['id' => $quizId]);
        }

        return $this->render('question/new.html.twig', [
            'question' => $question,
            'form' => $form,
            'quiz' => $quiz,
        ]);
    }

    #[Route('/{id}/edit', name: 'question_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Question $question, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(QuestionType::class, $question);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Question updated successfully.');
            return $this->redirectToRoute('quiz_view', ['id' => $question->getQuiz()->getIdQuiz()]);
        }

        return $this->render('question/edit.html.twig', [
            'question' => $question,
            'form' => $form,
            'quiz' => $question->getQuiz(),
        ]);
    }

    #[Route('/{id}/delete', name: 'question_delete', methods: ['GET'])]
    public function delete(Question $question, EntityManagerInterface $entityManager): Response
    {
        $quizId = $question->getQuiz()->getIdQuiz();
        
        $entityManager->remove($question);
        $entityManager->flush();

        $this->addFlash('success', 'Question deleted successfully.');
        return $this->redirectToRoute('quiz_view', ['id' => $quizId]);
    }

    // LIST ALL QUESTIONS
    /**
     * @Route("/questions", name="question_list")
     */
    public function list(): Response
    {
        $questions = $this->questionRepository->findAll();
        return $this->render('question/list.html.twig', [
            'questions' => $questions,
        ]);
    }

    // GET QUESTIONS BY QUIZ ID
    /**
     * @Route("/quiz/{quizId}/questions", name="questions_by_quiz")
     */
    public function getQuestionsByQuiz(int $quizId): Response
    {
        $quiz = $this->quizRepository->find($quizId);
        if (!$quiz) {
            throw $this->createNotFoundException('Quiz not found');
        }
        $questions = $quiz->getQuestions();

        return $this->render('question/list.html.twig', [
            'questions' => $questions,
        ]);
    }

    // GET QUESTION BY ID
    /**
     * @Route("/question/{id}", name="question_show")
     */
    public function show(Question $question): Response
    {
        return $this->render('question/show.html.twig', [
            'question' => $question,
        ]);
    }
}