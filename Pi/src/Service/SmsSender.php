<?php

namespace App\Service;

use Twilio\Rest\Client;

class SmsSender
{
    private $twilio;
    private $from;

    public function __construct(string $twilioSid, string $twilioToken, string $twilioFrom)
    {
        $this->twilio = new Client($twilioSid, $twilioToken);
        $this->from = $twilioFrom;
    }

    public function sendSms(string $to, string $message): void
    {
        $this->twilio->messages->create($to, [
            'from' => $this->from,
            'body' => $message,
        ]);
    }
}