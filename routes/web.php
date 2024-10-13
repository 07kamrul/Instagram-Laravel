<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfilesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', [ProfilesController::class, 'index'])->name('profile');

Route::get('/profile/{user}', [ProfilesController::class, 'show'])->name('profile.show');

Route::get('/post/create', [PostsController::class, 'create']);

Route::post('/post', [PostsController::class, 'store']);
