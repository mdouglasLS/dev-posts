<?php

use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;


Route::fallback(function () {
    return view('not-found');
})->name('not-found');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/search', [SearchController::class, 'search'])->name('search');

//Section Posts
Route::get('/post/new', [PostController::class, 'newPost'])->middleware('auth')->name('new-post');

Route::post('/post/new', [PostController::class, 'store'])->middleware('auth')->name('store-post');

Route::get('/post/{user:username}/{slug}', [PostController::class, 'getPostBySlug'])->name('get-post');

Route::get('/post/e/{user:username}/{slug}', [PostController::class, 'editPost'])->name('edit-post');

Route::post('/post/e/{user:username}/{slug}', [PostController::class, 'storeEditPost'])->name('store-edit-post');

Route::post('/post/c/{user:username}/{slug}', [CommentController::class, 'store'])->middleware('auth')->name('comment-post');

Route::delete('/comment/d/{comment:id}', [CommentController::class, 'delete'])->middleware('auth')->name('delete-comment');
//endSection Posts

Route::get('/{user:username}', [UserController::class, 'index'])->name('profile');
