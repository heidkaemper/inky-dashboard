<?php

namespace App;

use Illuminate\Support\Facades\Http;

class Packagist {
    public $endpoint = 'https://packagist.org/packages/';

    public function __construct(
        public string $package,
        public string $from,
        public string $to,
    ) {}

    public function getDownloads()
    {
        $response = Http::get($this->buildUrl());

        $response->throwUnlessStatus(200);

        $values = $response->json()['values'][$this->package];

        return collect($response->json()['labels'])
            ->mapWithKeys(fn ($item, $key) => [$item => $values[$key]]);
    }

    private function buildUrl()
    {
        return "{$this->endpoint}{$this->package}/stats/all.json?average=daily&from={$this->from}&to={$this->to}";
    }
}
