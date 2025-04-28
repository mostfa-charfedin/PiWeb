<?php

namespace App\Service;

use App\Repository\ProgrammebienetreRepository;
use App\Repository\AvisRepository;

class ProgrammeRecommendationService
{
    private $programmeRepo;
    private $avisRepo;
    private $huggingFaceService;

    public function __construct(
        ProgrammebienetreRepository $programmeRepo, 
        AvisRepository $avisRepo,
        HuggingFaceService $huggingFaceService
    ) {
        $this->programmeRepo = $programmeRepo;
        $this->avisRepo = $avisRepo;
        $this->huggingFaceService = $huggingFaceService;
    }

    public function getRecommendation(): array
    {
        $programmes = $this->programmeRepo->findAll();
        $programmesWithRatings = [];

        foreach ($programmes as $programme) {
            $average = $this->avisRepo->getAverageRatingForProgramme($programme->getIdprogramme());
            $programmesWithRatings[] = [
                'titre' => $programme->getTitre(),
                'description' => $programme->getDescription(),
                'average' => $average ?? 0
            ];
        }

        usort($programmesWithRatings, fn($a, $b) => $b['average'] <=> $a['average']);
        $topPrograms = array_slice($programmesWithRatings, 0, 5);

        $recommendation = $this->huggingFaceService->getRecommendation($topPrograms);

        if (str_starts_with($recommendation, 'Exception') || str_starts_with($recommendation, 'HuggingFace API error')) {
            $best = $topPrograms[0] ?? null;
            if ($best) {
                $recommendation = "Based on user reviews, the best program is: " . $best['titre'] . " (" . $best['average'] . "/5)";
            } else {
                $recommendation = "No program available.";
            }
        }

        return [
            'programmes' => $topPrograms,
            'recommendation' => $recommendation
        ];
    }
} 