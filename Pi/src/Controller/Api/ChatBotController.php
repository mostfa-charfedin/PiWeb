<?php

namespace App\Controller\Api;

use App\Service\ProgrammeRecommendationService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ChatBotController extends AbstractController
{
    #[Route('/api/chatbot', methods: ['POST'])]
    public function chat(Request $request, ProgrammeRecommendationService $recoService): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $question = $data['question'] ?? '';

        if (strtolower($question) === 'what is the best program') {
            $result = $recoService->getRecommendation();
            
            return $this->json([
                'message' => $result['recommendation'],
                'programmes' => $result['programmes']
            ]);
        }

        return $this->json([
            'message' => "Please ask: 'what is the best program'"
        ]);
    }
} 