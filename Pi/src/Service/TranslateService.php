<?php

namespace App\Service;

use Google\Cloud\Translate\V2\TranslateClient;

class TranslatorService
{
    private $translate;

    public function __construct(string $googleApiKeyPath)
    {
        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . $googleApiKeyPath);
        $this->translate = new TranslateClient();
    }

    public function translateText(string $text, string $targetLanguage = 'fr'): string
    {
        $result = $this->translate->translate($text, [
            'target' => $targetLanguage,
        ]);

        return $result['text'];
    }
}