<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\GivenAnswerCrudController;
use App\Http\Controllers\Admin\QuestionSetCrudController;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace' => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('question-set', 'QuestionSetCrudController');
    Route::crud('question', 'QuestionCrudController');
    Route::crud('answer', 'AnswerCrudController');
    Route::crud('given-answer', 'GivenAnswerCrudController');
    Route::get('givenanswers', [GivenAnswerCrudController::class, 'showGivenAnswers'])->name('givenanswers');
    Route::post('/admin/question-sets/{id}/set-dates', [QuestionSetCrudController::class, 'setDates'])->name('set-dates');
}); // this should be the absolute last line of this file