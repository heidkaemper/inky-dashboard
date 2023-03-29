<?php

use Illuminate\Support\Facades\Route;

Route::get('/test', function () {

    //$foo = new \App\Npmjs('tailwindcss-intersect', '2023-02-01', '2023-02-28');
    $foo = new \App\Packagist('heidkaemper/statamic-toolbar', '2023-02-01', '2023-02-28');

    dd($foo->getDownloads());

});
