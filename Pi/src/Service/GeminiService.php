<?php
<<<<<<< HEAD
namespace App\Service;

use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\Attribute\Autowire;


use Google\Cloud\AIPlatform\V1\Content;
use Google\Cloud\AIPlatform\V1\Part;
use Google\Cloud\AIPlatform\V1\SafetySetting;

use Google\Cloud\AIPlatform\V1\SafetySetting\HarmBlockThreshold;
use Google\Cloud\AIPlatform\V1\GenerationConfig;
use Google\Cloud\AIPlatform\V1\HarmCategory; // Some versions use this path
use Google\Cloud\AIPlatform\V1\GenerateContentRequest;

use Google\Cloud\AIPlatform\V1\Client\PredictionServiceClient;


class GeminiService
{
    private PredictionServiceClient $predictionServiceClient;
    private string $modelName;

    public function __construct(
        #[Autowire('%env(GOOGLE_APPLICATION_CREDENTIALS)%')] string $googleCredentials,
        #[Autowire('%env(GEMINI_API_ENDPOINT)%')] string $apiEndpoint,
        string $geminiModelName = 'projects/valiant-azimuth-402115/locations/us-central1/publishers/google/models/gemini-pro',
        private readonly LoggerInterface $logger
    ) {
        // putenv('GOOGLE_APPLICATION_CREDENTIALS=' . $googleCredentials);
        $this->predictionServiceClient = new PredictionServiceClient(['apiEndpoint' => $apiEndpoint]);
        $this->modelName = $geminiModelName;
    }

    public function generateMessage(string $prompt): string
    {
        $generationConfig = (new GenerationConfig())->setMaxOutputTokens(200);
        $safetySettings = [
            (new SafetySetting())
                ->setCategory(HarmCategory::HARM_CATEGORY_HARASSMENT)
                ->setThreshold(HarmBlockThreshold::BLOCK_MEDIUM_AND_ABOVE),
        ];

        $request = (new GenerateContentRequest())
            ->setModel($this->modelName)
            ->setContents([
                (new Content())->setParts([
                    (new Part())->setText($prompt),
                ]),
            ])
            ->setGenerationConfig($generationConfig)
            ->setSafetySettings($safetySettings);

        try {
            $response = $this->predictionServiceClient->generateContent($request);
            return $response->getCandidates()[0]->getContent()->getParts()[0]->getText();
        } catch (\Throwable $e) {
            $this->logger->error('Error generating Gemini message: ' . $e->getMessage() . "\n" . $e->getTraceAsString());
            return "Could not generate a summary message at this time.";
        } finally {
            $this->predictionServiceClient->close();
        }
=======

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class GeminiService
{
    private string $apiKey;
    private HttpClientInterface $client;

    public function __construct(HttpClientInterface $client, string $apiKey)
    {
        $this->client = $client;
        $this->apiKey = $apiKey;
    }

    public function generateText(string $prompt): string
    {
        $url = "https://generativelanguage.googleapis.com/v1/models/gemini-1.5-pro:generateContent?key={$this->apiKey}";

        // Ajout d'un contexte pour guider le modèle
        $context = "You are an AI assistant specialized in education and culture. Answer questions in these fields. " .
            "Politely decline questions outside of these topics.";

        // Fusion du contexte avec le prompt utilisateur
        $fullPrompt = $context . " User's question: " . $prompt;

        $response = $this->client->request('POST', $url, [
            'json' => [
                'contents' => [
                    ['parts' => [['text' => $fullPrompt]]]
                ],
            ],
        ]);

        $data = $response->toArray();
        return $data['candidates'][0]['content']['parts'][0]['text'] ?? 'No response from Gemini.';
>>>>>>> posts-claim
    }
}