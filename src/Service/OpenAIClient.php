<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class OpenAIClient
{
    public function __construct(
        private HttpClientInterface $http,
        private string $aiApiKey,
        private string $aiBaseUrl,
        private string $aiModel,
    ) {}

    public function rewrite(string $text, string $targetLang): string
    {
        $text = trim($text);
        if ($text === '') {
            return '';
        }

        $url = rtrim($this->aiBaseUrl, '/') . '/chat/completions';

        $payload = [
            'model' => $this->aiModel,
            'temperature' => 0.2,
            'messages' => [
                [
                    'role' => 'system',
                    'content' =>
                        "You rewrite user text into {$targetLang}. " .
                        "If already correct, return it unchanged. " .
                        "Output ONLY the corrected sentence. No explanations.",
                ],
                [
                    'role' => 'user',
                    'content' => $text,
                ],
            ],
        ];

        $response = $this->http->request('POST', $url, [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->aiApiKey,
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ],
            'json' => $payload,
        ]);

        $status = $response->getStatusCode();
        $data = $response->toArray(false);

        if ($status < 200 || $status >= 300) {
            return '';
        }

        $out = $data['choices'][0]['message']['content'] ?? '';
        return is_string($out) ? trim($out) : '';
    }
}
