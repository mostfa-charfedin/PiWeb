<?php

namespace App\Controller;

use App\Entity\Reponse;
use App\Entity\Question;
use App\Repository\ReponseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/reponse')]
class ReponseController extends AbstractController
{
    private EntityManagerInterface $entityManager;
    private ReponseRepository $reponseRepository;

    public function __construct(EntityManagerInterface $entityManager, ReponseRepository $reponseRepository)
    {
        $this->entityManager = $entityManager;
        $this->reponseRepository = $reponseRepository;
    }

    // 🔹 GET ALL RESPONSES
    #[Route('/', name: 'reponse_index', methods: ['GET'])]
    public function index(): JsonResponse
    {
        $reponses = $this->reponseRepository->findAll();
        return $this->json($reponses);
    }

    // 🔹 GET RESPONSE BY ID
    #[Route('/{id}', name: 'reponse_get_by_id', methods: ['GET'])]
    public function getById(int $id): JsonResponse
    {
        $reponse = $this->reponseRepository->find($id);
        if (!$reponse) {
            return $this->json(['error' => 'Réponse non trouvée'], JsonResponse::HTTP_NOT_FOUND);
        }
        return $this->json($reponse);
    }

    // 🔹 CREATE RESPONSE
    #[Route('/new', name: 'reponse_create', methods: ['POST'])]
    public function create(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if (!$data || !isset($data['response']) || !isset($data['status']) || !isset($data['idQuestion'])) {
            return $this->json(['error' => 'Données invalides'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $question = $this->entityManager->getRepository(Question::class)->find($data['idQuestion']);
        if (!$question) {
            return $this->json(['error' => 'Question non trouvée'], JsonResponse::HTTP_NOT_FOUND);
        }

        $reponse = new Reponse();
        $reponse->setResponse($data['response']);
        $reponse->setStatus($data['status']);
        $reponse->setQuestion($question);

        $this->entityManager->persist($reponse);
        $this->entityManager->flush();

        return $this->json(['message' => 'Réponse créée avec succès', 'id' => $reponse->getIdReponse()], JsonResponse::HTTP_CREATED);
    }

    // 🔹 UPDATE RESPONSE
    #[Route('/{id}', name: 'reponse_update', methods: ['PUT'])]
    public function update(Request $request, int $id): JsonResponse
    {
        $reponse = $this->reponseRepository->find($id);
        if (!$reponse) {
            return $this->json(['error' => 'Réponse non trouvée'], JsonResponse::HTTP_NOT_FOUND);
        }

        $data = json_decode($request->getContent(), true);

        if (isset($data['response'])) {
            $reponse->setResponse($data['response']);
        }
        if (isset($data['status'])) {
            $reponse->setStatus($data['status']);
        }
        if (isset($data['idQuestion'])) {
            $question = $this->entityManager->getRepository(Question::class)->find($data['idQuestion']);
            if ($question) {
                $reponse->setQuestion($question);
            }
        }

        $this->entityManager->flush();

        return $this->json(['message' => 'Réponse mise à jour avec succès']);
    }

    // 🔹 DELETE RESPONSE
    #[Route('/{id}', name: 'reponse_delete', methods: ['DELETE'])]
    public function delete(int $id): JsonResponse
    {
        $reponse = $this->reponseRepository->find($id);
        if (!$reponse) {
            return $this->json(['error' => 'Réponse non trouvée'], JsonResponse::HTTP_NOT_FOUND);
        }

        $this->entityManager->remove($reponse);
        $this->entityManager->flush();

        return $this->json(['message' => 'Réponse supprimée avec succès']);
    }

    // 🔹 GET RESPONSES BY QUESTION ID
    #[Route('/question/{id}', name: 'reponses_by_question', methods: ['GET'])]
    public function getByQuestionId(int $id): JsonResponse
    {
        $reponses = $this->reponseRepository->findBy(['question' => $id]);

        if (!$reponses) {
            return $this->json(['error' => 'Aucune réponse trouvée pour cette question'], JsonResponse::HTTP_NOT_FOUND);
        }

        return $this->json($reponses);
    }
}