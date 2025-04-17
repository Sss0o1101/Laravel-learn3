<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts2', [PostController::class, 'index2'])->name('posts.index2');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
