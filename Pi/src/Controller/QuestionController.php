<?php

namespace App\Controller;

use App\Entity\Question;
use App\Entity\Quiz;
use App\Entity\Response as QuestionResponse;
use App\Form\QuestionType;
use App\Repository\QuestionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

#[Route('/question')]
class QuestionController extends AbstractController
{
    #[Route('/new/{quizId}', name: 'question_create', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, int $quizId): HttpFoundationResponse
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
            return $this->redirectToRoute('quiz_edit', ['id' => $quizId]);
        }

        return $this->render('question/new.html.twig', [
            'question' => $question,
            'form' => $form,
            'quiz' => $quiz,
        ]);
    }

    #[Route('/{id}/edit', name: 'question_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Question $question, EntityManagerInterface $entityManager): HttpFoundationResponse
    {
        $form = $this->createForm(QuestionType::class, $question);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Question updated successfully.');
            return $this->redirectToRoute('quiz_edit', ['id' => $question->getQuiz()->getId()]);
        }

        return $this->render('question/edit.html.twig', [
            'question' => $question,
            'form' => $form,
            'quiz' => $question->getQuiz(),
        ]);
    }

    #[Route('/{id}/delete', name: 'question_delete', methods: ['GET', 'POST'])]
    public function delete(Request $request, Question $question, EntityManagerInterface $entityManager): HttpFoundationResponse
    {
        try {
            $quizId = $question->getQuiz()->getId();
            
            // Delete all responses associated with this question
            foreach ($question->getResponses() as $response) {
                $entityManager->remove($response);
            }
            
            // Delete the question
            $entityManager->remove($question);
            $entityManager->flush();
            
            $this->addFlash('success', 'Question deleted successfully');
            return $this->redirectToRoute('quiz_edit', ['id' => $quizId]);
        } catch (\Exception $e) {
            $this->addFlash('error', 'An error occurred while deleting the question: ' . $e->getMessage());
            return $this->redirectToRoute('quiz_edit', ['id' => $question->getQuiz()->getId()]);
        }
    }

    #[Route('/responses/{id}', name: 'question_responses', methods: ['GET'])]
    public function getResponses(Question $question): JsonResponse
    {
        try {
            $responses = [];
            foreach ($question->getResponses() as $response) {
                $responses[] = [
                    'id' => $response->getId(),
                    'text' => $response->getText(),
                    'isCorrect' => $response->isCorrect()
                ];
            }
            
            return new JsonResponse($responses);
        } catch (\Exception $e) {
            error_log("Error getting responses: " . $e->getMessage());
            return new JsonResponse([
                'error' => 'An error occurred while fetching responses'
            ], 500);
        }
    }

    #[Route('/ajax/create/{quizId}', name: 'question_create_ajax', methods: ['POST'])]
    public function createAjax(Request $request, EntityManagerInterface $entityManager, int $quizId): JsonResponse
    {
        try {
            // Start transaction
            $entityManager->beginTransaction();

            // Get the quiz
            $quiz = $entityManager->getRepository(Quiz::class)->find($quizId);
            if (!$quiz) {
                return new JsonResponse([
                    'success' => false,
                    'error' => 'Quiz not found'
                ], 404);
            }

            // Get and decode the request data
            $content = $request->getContent();
            error_log("Received content: " . $content);
            
            $data = json_decode($content, true);
            error_log("Decoded data: " . print_r($data, true));
            
            if (json_last_error() !== JSON_ERROR_NONE) {
                return new JsonResponse([
                    'success' => false,
                    'error' => 'Invalid JSON data: ' . json_last_error_msg()
                ], 400);
            }
            
            if (!$data || !isset($data['text']) || !isset($data['responses'])) {
                return new JsonResponse([
                    'success' => false,
                    'error' => 'Invalid request data'
                ], 400);
            }

            // Validate question text
            if (empty($data['text'])) {
                return new JsonResponse([
                    'success' => false,
                    'error' => 'Question text is required'
                ], 400);
            }

            // Validate responses
            if (empty($data['responses'])) {
                return new JsonResponse([
                    'success' => false,
                    'error' => 'At least one response is required'
                ], 400);
            }

            // Create question
            $question = new Question();
            $question->setText($data['text']);
            $question->setQuiz($quiz);
            $entityManager->persist($question);
            $entityManager->flush(); // Flush to get the question ID
            
            // Create responses
            foreach ($data['responses'] as $responseData) {
                if (!empty($responseData['text'])) {
                    $response = new QuestionResponse();
                    $response->setText($responseData['text']);
                    $response->setIsCorrect($responseData['isCorrect'] ?? false);
                    $response->setQuestion($question);
                    $entityManager->persist($response);
                }
            }

            // Save everything
            $entityManager->flush();
            $entityManager->commit();

            return new JsonResponse([
                'success' => true,
                'message' => 'Question created successfully',
                'questionId' => $question->getId()
            ], 201);

        } catch (\Exception $e) {
            // Rollback the transaction if there was an error
            if ($entityManager->getConnection()->isTransactionActive()) {
                $entityManager->rollback();
            }
            
            error_log("Error creating question: " . $e->getMessage());
            error_log("Stack trace: " . $e->getTraceAsString());
            
            return new JsonResponse([
                'success' => false,
                'error' => 'An error occurred: ' . $e->getMessage()
            ], 500);
        }
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