<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class HuggingFaceService
{
    private $client;
    private $apiKey = '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';

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    public function getRecommendation(array $programmes): string
    {
        $programmesInfo = '';
        foreach ($programmes as $programme) {
            $programmesInfo .= sprintf(
                "Program: %s\nRating: %.1f/5\nDescription: %s\n\n",
                $programme['titre'],
                $programme['average'],
                $programme['description']
            );
        }

        $prompt = "Based on these programs and their ratings, recommend the best one:\n\n" . $programmesInfo;

        // DEBUG: log the prompt (in real app, use logger)
        file_put_contents(__DIR__.'/../../var/log/hf_prompt.log', $prompt . "\n\n", FILE_APPEND);

        try {
            $response = $this->client->request('POST', 'https://api-inference.huggingface.co/models/gpt2', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->apiKey,
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'inputs' => $prompt,
                    'parameters' => [
                        'max_length' => 200,
                        'temperature' => 0.7
                    ]
                ],
            ]);

            $data = $response->toArray(false); // false: don't throw on 4xx/5xx
            if (isset($data['error'])) {
                return 'HuggingFace API error: ' . $data['error'];
            }
            return $data[0]['generated_text'] ?? 'Sorry, I could not generate a recommendation.';
        } catch (\Exception $e) {
            return 'Exception: ' . $e->getMessage();
        }
    }
} 