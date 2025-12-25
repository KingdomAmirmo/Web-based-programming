<?php

use App\Models\Order;
use Illuminate\Support\Facades\DB;
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


Route::get('/having-test', function () {
    $users = Order::select('user_id', DB::raw('SUM(total_amount) as total'))
        ->groupBy('user_id')
        ->having('total', '>', 500)
        ->get();

    return view('having', compact('users'));
});
