<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelthCheckController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ok', [HelthCheckController::class, 'ok']);
