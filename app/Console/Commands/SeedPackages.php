<?php

namespace App\Console\Commands;

use App\Models\Package;
use Illuminate\Console\Command;

class SeedPackages extends Command
{
    protected $signature = 'app:seed-packages';

    protected $packages = [
        [
            'name' => 'heidkaemper/statamic-import-image-metadata',
            'source' => 'packagist',
        ],
        [
            'name' => 'heidkaemper/statamic-toolbar',
            'source' => 'packagist',
        ],
        [
            'name' => 'utakka/redactor-anchors',
            'source' => 'packagist',
        ],
        [
            'name' => 'ndx/statamic-bard-color-picker',
            'source' => 'packagist',
        ],
        [
            'name' => 'alpinejs-intersect-class',
            'source' => 'npmjs',
        ],
        [
            'name' => 'tailwindcss-intersect',
            'source' => 'npmjs',
        ],
        [
            'name' => 'tailwindcss-animated',
            'source' => 'npmjs',
        ],
    ];

    public function handle(): void
    {
        foreach ($this->packages as $package) {
            Package::firstOrCreate($package);

            $this->info("Package '{$package['name']}' created.");
        }
    }
}
