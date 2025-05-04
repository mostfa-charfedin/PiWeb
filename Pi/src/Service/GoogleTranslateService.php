<?php

namespace App\Service;

use Google\Cloud\Translate\TranslateClient;

class GoogleTranslateService
{
    private $translateClient;

    public function __construct()
    {
        $this->translateClient = new TranslateClient([
            'key' => $_ENV['GOOGLE_TRANSLATE_API_KEY'] ?? null
        ]);
    }

    public function translate($text, $targetLanguage = 'en', $sourceLanguage = null)
    {
        try {
            $result = $this->translateClient->translate($text, [
                'target' => $targetLanguage,
                'source' => $sourceLanguage
            ]);
            
            return $result['text'];
        } catch (\Exception $e) {
            throw new \RuntimeException('Translation failed: ' . $e->getMessage());
        }
    }

    public function detectLanguage($text)
    {
        try {
            $result = $this->translateClient->detectLanguage($text);
            return $result[0]['language'];
        } catch (\Exception $e) {
            throw new \RuntimeException('Language detection failed: ' . $e->getMessage());
        }
    }
}
