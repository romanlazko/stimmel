<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SitemapController;

Route::get('/', function () {
    return view('index');
});

Route::get('/sitemap.xml', [SitemapController::class, 'index']);
