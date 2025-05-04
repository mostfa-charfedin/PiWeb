<?php
namespace App\Service;

use GuzzleHttp\Client;

class ChatGPTService
{
    private string $apiKey;
    private Client $client;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
        $this->client = new Client(['base_uri' => 'https://api.openai.com/v1/']);
    }

    public function generateMessage(string $prompt): string
    {
        try {
            $response = $this->client->request('POST', 'https://api.openai.com/v1/chat/completions', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->apiKey,
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'model' => 'gpt-3.5-turbo',
                    'messages' => [
                        ['role' => 'system', 'content' => 'You are a helpful assistant.'],
                        ['role' => 'user', 'content' => $prompt],
                    ],
                ],
            ]);
    
            $data = json_decode($response->getBody(), true);
            return $data['choices'][0]['message']['content'] ?? 'No response.';
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            if ($e->getCode() === 429) {
                // Handle the 429 error (Too Many Requests)
                return 'You have exceeded the API request quota for this month. Please try again later.';
            }
            return 'An error occurred while processing your request.';
        }
    }
    

}