<?php

namespace App\Controller;

use App\Entity\Question;
use App\Repository\QuestionRepository;
use App\Repository\QuizRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class QuestionController extends AbstractController
{
    private $questionRepository;
    private $quizRepository;
    private $entityManager;

    public function __construct(
        QuestionRepository $questionRepository, 
        QuizRepository $quizRepository,
        EntityManagerInterface $entityManager
    ) {
        $this->questionRepository = $questionRepository;
        $this->quizRepository = $quizRepository;
        $this->entityManager = $entityManager;
    }

    // CREATE
    /**
     * @Route("/question/create", name="question_create")
     */
    public function create(Request $request): Response
    {
        $question = new Question();
        $form = $this->createFormBuilder($question)
            ->add('question', TextType::class)
            ->add('quiz', TextType::class)
            ->add('save', SubmitType::class, ['label' => 'Create Question'])
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $quiz = $this->quizRepository->findOneBy(['name' => $data->getQuiz()]);
            $question->setQuiz($quiz);
            $this->entityManager->persist($question);
            $this->entityManager->flush();

            return $this->redirectToRoute('question_list');
        }

        return $this->render('question/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    // UPDATE
    /**
     * @Route("/question/{id}/edit", name="question_edit")
     */
    public function edit(Request $request, Question $question): Response
    {
        $form = $this->createFormBuilder($question)
            ->add('question', TextType::class)
            ->add('quiz', TextType::class)
            ->add('save', SubmitType::class, ['label' => 'Update Question'])
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();
            return $this->redirectToRoute('question_list');
        }

        return $this->render('question/edit.html.twig', [
            'form' => $form->createView(),
            'question' => $question,
        ]);
    }

    // DELETE
    /**
     * @Route("/question/{id}/delete", name="question_delete")
     */
    public function delete(Question $question): Response
    {
        $this->entityManager->remove($question);
        $this->entityManager->flush();
        return $this->redirectToRoute('question_list');
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