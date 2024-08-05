<?php

use App\Http\Controllers\Admin\GivenAnswerCrudController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kviz', [FrontendController::class, 'index'])->name('kviz.index');
Route::post('/api/vote', [FrontendController::class, 'vote'])->name('kviz.vote');
