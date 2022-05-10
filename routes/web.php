<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;

Route::controller(PostController::class)->group(function () {
    Route::get('/', 'all_posts');

    Route::get('/home', 'all_posts');

    Route::get('/all/posts', 'all_posts')->name('home');
    Route::get('/all/posts', 'all_posts')->name('home');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('posts', PostController::class);
});
