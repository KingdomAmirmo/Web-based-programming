<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;


Route::get('/', function () {
//    return view('welcome');
    return redirect()->route('users.index');
});


Route::resource('users', \App\Http\Controllers\UserController::class);


Route::resource('posts', PostController::class);

Route::prefix('posts/{post}')->group(function () {
    Route::get('comments/create', [CommentController::class, 'create'])->name('posts.comments.create');
    Route::post('comments', [CommentController::class, 'store'])->name('posts.comments.store');
});

Route::resource('comments', CommentController::class)->except(['create','store']);
