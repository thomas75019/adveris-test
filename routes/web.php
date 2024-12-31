<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/', [ArticleController::class, 'index'])->name('articles.index');

Route::middleware('auth')->group(function () {
    Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
    Route::get('/articles/{slug}', [ArticleController::class, 'show'])->name('articles.show');
    Route::get('/articles', [ArticleController::class, 'list'])->name('articles.list');
    Route::get('/articles/{slug}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
    Route::delete('/articles/{slug}', [ArticleController::class, 'destroy'])->name('articles.destroy');
    Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
    Route::post('/articles/{slug}', [ArticleController::class, 'update'])->name('articles.update');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
