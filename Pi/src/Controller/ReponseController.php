<?php

namespace App\Controller;

use App\Entity\Reponse;
use App\Entity\Question;
use App\Entity\User;
use App\Form\ReponseType;
use App\Repository\ReponseRepository;
use App\Repository\QuestionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class ReponseController extends AbstractController
{
    #[Route('/question/{idQuestion}/reponse/new', name: 'reponse_new')]
    public function createReponse(
        int $idQuestion,
        Request $request,
        EntityManagerInterface $em,
        QuestionRepository $questionRepository,
        SessionInterface $session
    ): Response {
        // Check if user is logged in
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        // Get user
        $userId = $session->get('id');
        $user = $em->getRepository(User::class)->find($userId);

        // Get the question
        $question = $questionRepository->find($idQuestion);
        if (!$question) {
            throw $this->createNotFoundException('Question not found');
        }

        $reponse = new Reponse();
        $reponse->setIdquestion($question);

        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($reponse);
            $em->flush();

            return $this->redirectToRoute('question_show', ['idQuestion' => $idQuestion]);
        }

        return $this->render('integration/reponse_form.html.twig', [
            'formReponse' => $form->createView(),
            'edit_mode' => false,
            'user' => $user,
            'question' => $question,
        ]);
    }

    #[Route('/reponse/{idReponse}/edit', name: 'reponse_edit')]
    public function editReponse(
        int $idReponse,
        Request $request,
        ReponseRepository $reponseRepository,
        EntityManagerInterface $em,
        SessionInterface $session
    ): Response {
        // Check if user is logged in
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        // Get user
        $userId = $session->get('id');
        $user = $em->getRepository(User::class)->find($userId);

        $reponse = $reponseRepository->find($idReponse);
        if (!$reponse) {
            throw $this->createNotFoundException('Reponse not found');
        }

        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();

            return $this->redirectToRoute('question_show', [
                'idQuestion' => $reponse->getIdquestion()->getIdQuestion()
            ]);
        }

        return $this->render('integration/reponse_form.html.twig', [
            'formReponse' => $form->createView(),
            'edit_mode' => true,
            'user' => $user,
            'question' => $reponse->getIdquestion(),
        ]);
    }

    #[Route('/reponse/{idReponse}/delete', name: 'reponse_delete')]
    public function deleteReponse(
        int $idReponse,
        ReponseRepository $reponseRepository,
        EntityManagerInterface $em,
        SessionInterface $session
    ): Response {
        // Check if user is logged in
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        // Get user
        $userId = $session->get('id');
        $user = $em->getRepository(User::class)->find($userId);

        $reponse = $reponseRepository->find($idReponse);
        if (!$reponse) {
            throw $this->createNotFoundException('Reponse not found');
        }

        $questionId = $reponse->getIdquestion()->getIdQuestion();

        $em->remove($reponse);
        $em->flush();

        return $this->redirectToRoute('question_show', ['idQuestion' => $questionId]);
    }
}