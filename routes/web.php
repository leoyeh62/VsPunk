<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name("accueil");

Route::get('/contact', function () {
    return view('contact');
})->name("contact");

Route::get('/test-vite', function () {
    return view('test-vite');
})->name("test-vite");

Route::get('/home', function () {
    return view('home');
})->name("home");

Route::get('/user/{id}', [App\Http\Controllers\UserController::class, 'show'])
    ->name('user.show');

Route::post('/user/{id}/follow', [App\Http\Controllers\UserController::class, 'toggleFollow'])
    ->middleware('auth')
    ->name('user.follow');
