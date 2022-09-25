<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\PostController;



Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::get('/post/new', [PostController::class, 'newPost'])->middleware('auth')->name('new-post');

Route::post('/post/new', [PostController::class, 'store'])->middleware('auth')->name('store-post');

Route::get('/post/edit/{post:slug}', [PostController::class, 'newPost'])->name('edit-post');

Route::get('/post/{post:slug}', [PostController::class, 'getPostBySlug'])->name('get-post');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
