<?php

use App\Http\Controllers\SurveyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::prefix('survey/')->name('survey.')->group(function(): void{

    Route::get('', [SurveyController::class, 'index'])
        ->name('index');

    
});

require __DIR__ . '\auth.php';