<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\PageController;
use Illuminate\Http\Request;

Route::get('/', [PageController::class, 'accueil']);

Route::get('/fiche', [PageController::class, 'fiche']);
Route::get('/partager', [PageController::class, 'partager']);
Route::get('/reviser', [PageController::class, 'reviser']);
