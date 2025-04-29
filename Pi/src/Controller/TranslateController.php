<?php

namespace App\Controller;

use App\Service\GoogleTranslateService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TranslateController extends AbstractController
{
    private $translateService;

    public function __construct(GoogleTranslateService $translateService)
    {
        $this->translateService = $translateService;
    }

    #[Route('/api/translate', name: 'api_translate', methods: ['POST'])]
    public function translate(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        
        if (!isset($data['text'])) {
            return new JsonResponse(['error' => 'Text is required'], 400);
        }

        try {
            $translatedText = $this->translateService->translate(
                $data['text'],
                $data['target'] ?? 'en',
                $data['source'] ?? null
            );

            return new JsonResponse(['translation' => $translatedText]);
        } catch (\Exception $e) {
            return new JsonResponse(['error' => $e->getMessage()], 500);
        }
    }

    #[Route('/api/detect-language', name: 'api_detect_language', methods: ['POST'])]
    public function detectLanguage(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        
        if (!isset($data['text'])) {
            return new JsonResponse(['error' => 'Text is required'], 400);
        }

        try {
            $language = $this->translateService->detectLanguage($data['text']);
            return new JsonResponse(['language' => $language]);
        } catch (\Exception $e) {
            return new JsonResponse(['error' => $e->getMessage()], 500);
        }
    }
}
