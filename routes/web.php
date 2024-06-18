<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\SurveyController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::prefix('survey/')->name('survey.')->group(function(): void{

    Route::get('', [SurveyController::class, 'index'])
        ->name('index');

});

Route::prefix('event/')->name('event.')->group(function(): void{

    Route::get('', [EventController::class, 'index'])
        ->name('index');

});

require __DIR__ . '\auth.php';