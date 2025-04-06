<?php

namespace App\Controller;

use App\Entity\Quiz;
use App\Form\QuizType;
use App\Repository\QuizRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuizController extends AbstractController
{
    private $quizRepository;
    private $entityManager;

    public function __construct(
        QuizRepository $quizRepository,
        EntityManagerInterface $entityManager
    ) {
        $this->quizRepository = $quizRepository;
        $this->entityManager = $entityManager;
    }

    #[Route('/quiz', name: 'quiz_list')]
    public function index(): Response
    {
        $quizzes = $this->quizRepository->findAll();
        return $this->render('quiz/ListQuiz.html.twig', [
            'quizzes' => $quizzes,
        ]);
    }

    #[Route('/quiz/create', name: 'quiz_create')]
    public function create(Request $request): Response
    {
        $quiz = new Quiz();
        $form = $this->createForm(QuizType::class, $quiz);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($quiz);
            $this->entityManager->flush();

            return $this->redirectToRoute('quiz_list');
        }

        return $this->render('quiz/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/quiz/{id}/edit', name: 'quiz_edit')]
    public function edit(Request $request, Quiz $quiz): Response
    {
        $form = $this->createForm(QuizType::class, $quiz);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();
            return $this->redirectToRoute('quiz_list');
        }

        return $this->render('quiz/edit.html.twig', [
            'form' => $form->createView(),
            'quiz' => $quiz,
        ]);
    }

    #[Route('/quiz/{id}/delete', name: 'quiz_delete')]
    public function delete(Quiz $quiz): Response
    {
        $this->entityManager->remove($quiz);
        $this->entityManager->flush();
        return $this->redirectToRoute('quiz_list');
    }

    #[Route('/quiz/{id}/view', name: 'quiz_view')]
    public function view(Quiz $quiz): Response
    {
        return $this->render('quiz/view.html.twig', [
            'quiz' => $quiz,
        ]);
    }

    // ----------------- API ENDPOINTS -----------------

    #[Route('/api', name: 'quiz_api_index', methods: ['GET'])]
    public function apiIndex(): JsonResponse
    {
        $quizzes = $this->quizRepository->findAll();
        return $this->json($quizzes);
    }

    #[Route('/api/new', name: 'quiz_api_create', methods: ['POST'])]
    public function apiCreate(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        
        if (!$data || !isset($data['nom']) || !isset($data['dateCreation'])) {
            return $this->json(['error' => 'Invalid data'], JsonResponse::HTTP_BAD_REQUEST);
        }

        if ($this->quizRepository->findOneBy(['nom' => $data['nom']])) {
            return $this->json(['error' => 'Quiz with this name already exists'], JsonResponse::HTTP_CONFLICT);
        }

        $quiz = new Quiz();
        $quiz->setNom($data['nom']);
        $quiz->setDatecreation(new \DateTime($data['dateCreation']));

        $this->entityManager->persist($quiz);
        $this->entityManager->flush();

        return $this->json(['message' => 'Quiz created successfully', 'id' => $quiz->getIdquiz()], JsonResponse::HTTP_CREATED);
    }

    #[Route('/api/{id}', name: 'quiz_api_update', methods: ['PUT'])]
    public function apiUpdate(Request $request, int $id): JsonResponse
    {
        $quiz = $this->quizRepository->find($id);
        if (!$quiz) {
            return $this->json(['error' => 'Quiz not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $data = json_decode($request->getContent(), true);
        if (isset($data['nom'])) {
            $quiz->setNom($data['nom']);
        }
        if (isset($data['dateCreation'])) {
            $quiz->setDatecreation(new \DateTime($data['dateCreation']));
        }

        $this->entityManager->flush();

        return $this->json(['message' => 'Quiz updated successfully']);
    }

    #[Route('/api/{id}', name: 'quiz_api_delete', methods: ['DELETE'])]
    public function apiDelete(int $id): JsonResponse
    {
        $quiz = $this->quizRepository->find($id);
        if (!$quiz) {
            return $this->json(['error' => 'Quiz not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $this->entityManager->remove($quiz);
        $this->entityManager->flush();

        return $this->json(['message' => 'Quiz deleted successfully']);
    }

    #[Route('/api/{id}', name: 'quiz_api_get_by_id', methods: ['GET'])]
    public function apiGetById(int $id): JsonResponse
    {
        $quiz = $this->quizRepository->find($id);
        if (!$quiz) {
            return $this->json(['error' => 'Quiz not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        return $this->json($quiz);
    }

    #[Route('/api/names', name: 'quiz_api_get_all_names', methods: ['GET'])]
    public function apiGetAllNames(): JsonResponse
    {
        $quizzes = $this->quizRepository->findAll();
        $names = array_map(fn($quiz) => $quiz->getNom(), $quizzes);

        return $this->json($names);
    }
}