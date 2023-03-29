<?php

namespace App;

use Illuminate\Support\Facades\Http;

class Npmjs {
    public $endpoint = 'https://api.npmjs.org/downloads/range/';

    public function __construct(
        public string $package,
        public string $from,
        public string $to,
    ) {}

    public function getDownloads()
    {
        $response = Http::get($this->buildUrl());

        $response->throwUnlessStatus(200);

        return collect($response->json()['downloads'])
            ->mapWithKeys(fn ($item) => [$item['day'] => $item['downloads']]);
    }

    private function buildUrl()
    {
        return "{$this->endpoint}{$this->from}:{$this->to}/{$this->package}";
    }
}
