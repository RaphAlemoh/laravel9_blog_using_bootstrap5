<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::controller(PostController::class)->group(function () {
    Route::get('/', 'all_posts');
    Route::get('/all/posts', 'all_posts')->name('home');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('posts', PostController::class);
});

