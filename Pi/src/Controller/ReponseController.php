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
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        $user = $em->getRepository(User::class)->find($session->get('id'));
        $question = $questionRepository->find($idQuestion);

        if (!$question) {
            throw $this->createNotFoundException('Question not found');
        }

        $reponse = new Reponse();
        $reponse->setQuestion($question);

        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($reponse);
            $em->flush();

            return $this->redirectToRoute('question_show', ['id' => $idQuestion]);
        }

        return $this->render('quiz/reponseForm.html.twig', [
            'formReponse' => $form->createView(), // ✅ use 'form'
            'user' => $user,
            'question' => $question,
        ]);
    }

    #[Route('/reponse/{idReponse}/delete', name: 'reponse_delete', methods: ['POST'])]
    public function deleteReponse(
        int $idReponse,
        ReponseRepository $reponseRepository,
        EntityManagerInterface $em,
        SessionInterface $session
    ): Response {
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        $user = $em->getRepository(User::class)->find($session->get('id'));
        $reponse = $reponseRepository->find($idReponse);

        if (!$reponse) {
            throw $this->createNotFoundException('Response not found');
        }

        $questionId = $reponse->getQuestion()->getIdQuestion();

        $em->remove($reponse);
        $em->flush();

        return $this->redirectToRoute('question_show', ['id' => $questionId]);
    }
}