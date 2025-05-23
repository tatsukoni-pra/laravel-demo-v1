<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelthCheckController;
use App\Http\Controllers\TestTableController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ok', [HelthCheckController::class, 'ok']);

Route::get('/first', [TestTableController::class, 'index']);
