<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/dashboard', DashboardController::class);

Route::get('/test', function () {

    //$foo = new \App\Npmjs('tailwindcss-intersect', '2023-02-01', '2023-02-28');
    $foo = new \App\Packagist('heidkaemper/statamic-toolbar', '2023-02-01', '2023-02-28');

    dd($foo->getDownloads());

});
