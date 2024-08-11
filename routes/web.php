<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\SurveyController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware('auth')->prefix('survey/')->name('survey.')->group(function(): void{

    Route::get('', [SurveyController::class, 'index'])
        ->name('index')
        ->withoutMiddleware('auth');

    Route::get('create', [SurveyController::class, 'create'])->name('create');

    Route::post('store', [SurveyController::class, 'store'])->name('store');

    Route::prefix('item/')->name('item.')->group(function (): void{
        Route::post('store',  [SurveyController::class, 'storeItem'])
            ->name('store');
    });
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

    Route::prefix('posts/')->name('posts.')->group(function(): void{
        
        Route::get('create', [BlogController::class, 'createPost'])
            ->name('create')
            ->middleware('auth');

        Route::post('store', [BlogController::class, 'storePost'])
            ->name('store')
            ->middleware('auth');

        Route::patch('react', [BlogController::class, 'react'])
            ->name('react')
            ->middleware('auth');

        Route::post('delete', [BlogController::class, 'deletePost'])
            ->name('delete')
            ->middleware('auth');
    });

    Route::prefix('comments/')->name('comments.')->group(function (): void{
        Route::get('create/{post}', [BlogController::class, 'createComment'])
            ->name('create')
            ->middleware('auth');

        Route::post('store/', [BlogController::class, 'storeComment'])
            ->name('store')
            ->middleware('auth');
    });
});

require __DIR__ . '\auth.php';