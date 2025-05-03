<?php

namespace App\Controller;

use App\Entity\zQuestion;
use App\Entity\Quiz;
use App\Entity\Reponse;
use App\Entity\User;
use App\Form\QuestionType;
use App\Repository\QuestionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    #[Route('/question/new/{quizId}', name: 'question_new')]
    public function new(
        int $quizId,
        Request $request,
        EntityManagerInterface $em,
        SessionInterface $session
    ): Response {
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        $user = $em->getRepository(User::class)->find($session->get('id'));
        $quiz = $em->getRepository(Quiz::class)->find($quizId);

        if (!$quiz) {
            throw $this->createNotFoundException('Quiz not found');
        }

        $question = new Question();
        $question->setQuiz($quiz);

        // Add placeholder responses
        for ($i = 0; $i < 3; $i++) {
            $question->addReponse(new Reponse());
        }

        $form = $this->createForm(QuestionType::class, $question);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($question);
            $em->flush();

            return $this->redirectToRoute('quiz_show', ['id' => $quiz->getIdquiz()]);
        }

        return $this->render('quiz/reponseForm.html.twig', [
            'form' => $form->createView(),
            'user' => $user,
            'quiz' => $quiz,
            'question' => $question, // ✅ Fix added here
        ]);
    }

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

        $user = $em->getRepository(User::class)->find($session->get('id'));

        $question = $questionRepository->find($id);
        if (!$question) {
            throw $this->createNotFoundException('Question not found');
        }

        $form = $this->createForm(QuestionType::class, $question);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();

            return $this->redirectToRoute('quiz_show', [
                'id' => $question->getQuiz()->getIdquiz()
            ]);
        }

        return $this->render('quiz/reponseForm.html.twig', [
            'formQuestion' => $form->createView(),
            'edit_mode' => true,
            'user' => $user,
            'quiz' => $question->getQuiz(),
            'question' => $question,
        ]);
    }

    #[Route('/question/{id}/delete', name: 'question_delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function delete(
        int $id,
        QuestionRepository $questionRepository,
        EntityManagerInterface $em,
        SessionInterface $session
    ): Response {
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        $question = $questionRepository->find($id);
        if (!$question) {
            throw $this->createNotFoundException('Question not found');
        }

        $quizId = $question->getQuiz()->getIdquiz();

        $em->remove($question);
        $em->flush();

        return $this->redirectToRoute('quiz_show', ['id' => $quizId]);
    }

    #[Route('/question/{id}', name: 'question_show', requirements: ['id' => '\d+'])]
    public function show(
        int $id,
        QuestionRepository $questionRepository,
        SessionInterface $session,
        EntityManagerInterface $em
    ): Response {
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        $user = $em->getRepository(User::class)->find($session->get('id'));
        $question = $questionRepository->find($id);

        if (!$question) {
            throw $this->createNotFoundException('Question not found');
        }

        return $this->render('quiz/question_show.html.twig', [
            'question' => $question,
            'reponses' => $question->getReponses(),
            'user' => $user,
            'quiz' => $question->getQuiz(),
            'question' => $question,
        ]);
    }
}