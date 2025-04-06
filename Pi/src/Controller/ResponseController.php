<?php

namespace App\Controller;

use App\Entity\Question;
use App\Entity\Response;
use App\Form\ResponseType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response as HttpResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/response')]
class ResponseController extends AbstractController
{
    #[Route('/new/{questionId}', name: 'response_create', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, int $questionId): HttpResponse
    {
        $question = $entityManager->getRepository(Question::class)->find($questionId);
        
        if (!$question) {
            throw $this->createNotFoundException('Question not found');
        }
        
        $response = new Response();
        $response->setQuestion($question);
        
        $form = $this->createForm(ResponseType::class, $response);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($response);
            $entityManager->flush();

            $this->addFlash('success', 'Response created successfully.');
            return $this->redirectToRoute('quiz_view', ['id' => $question->getQuiz()->getId()]);
        }

        return $this->render('response/new.html.twig', [
            'response' => $response,
            'form' => $form,
            'question' => $question,
            'quiz' => $question->getQuiz(),
        ]);
    }

    #[Route('/{id}/edit', name: 'response_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Response $response, EntityManagerInterface $entityManager): HttpResponse
    {
        $form = $this->createForm(ResponseType::class, $response);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Response updated successfully.');
            return $this->redirectToRoute('quiz_view', ['id' => $response->getQuestion()->getQuiz()->getId()]);
        }

        return $this->render('response/edit.html.twig', [
            'response' => $response,
            'form' => $form,
            'question' => $response->getQuestion(),
            'quiz' => $response->getQuestion()->getQuiz(),
        ]);
    }

    #[Route('/{id}/delete', name: 'response_delete', methods: ['GET'])]
    public function delete(Request $request, EntityManagerInterface $entityManager, int $id): HttpResponse
    {
        $response = $entityManager->getRepository(Response::class)->find($id);
        
        if (!$response) {
            throw $this->createNotFoundException('Response not found');
        }
        
        $quizId = $response->getQuestion()->getQuiz()->getId();
        
        $entityManager->remove($response);
        $entityManager->flush();

        $this->addFlash('success', 'Response deleted successfully.');
        return $this->redirectToRoute('quiz_view', ['id' => $quizId]);
    }
} 