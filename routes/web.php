<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChallengeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/challenge', [ChallengeController::class, 'index']);