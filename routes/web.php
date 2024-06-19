<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CourseController;
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

Route::prefix('course/')->name('course.')->group(function(): void{

    Route::get('', [CourseController::class, 'index'])
        ->name('index');

});

Route::prefix('blog/')->name('blog.')->group(function(): void{

    Route::get('', [BlogController::class, 'index'])
        ->name('index');

});

require __DIR__ . '\auth.php';