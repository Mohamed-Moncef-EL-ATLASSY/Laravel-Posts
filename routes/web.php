<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PostLikeController;

//Register
Route::get('/register' , [RegisterController::class, 'index'])->name('register');
Route::post('/register' , [RegisterController::class, 'store']);

//Dashboard
Route::get('/dashboard' , [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

//Log In
Route::get('/login' , [LoginController::class, 'index'])->name('login');
Route::post('/login' , [LoginController::class, 'store']);

//Log Out
Route::post('/logout' , [LogoutController::class, 'store'])->name('logout');

//Home page
Route::get('/', function () { return view('index'); })->name('homepage');

//Posts
Route::get('/posts' , [PostController::class, 'index'])->name('posts');
Route::post('/posts' , [PostController::class, 'store']);

//Like
Route::post('/posts/{post}/likes', [PostLikeController::class, 'store'])->name('posts.likes');

//Unlike
Route::delete('/posts/{post}/likes', [PostLikeController::class, 'destroy'])->name('posts.likes');


