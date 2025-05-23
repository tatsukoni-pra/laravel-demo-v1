<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelthCheckController;
use App\Http\Controllers\ApiTestController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ok', [HelthCheckController::class, 'ok']);

Route::get('/first', [ApiTestController::class, 'index']);
