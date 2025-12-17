
<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Http\Controllers\ArticleShowController;
use App\Http\Controllers\ArticleLikeController;


Route::get('/', [HomeController::class, 'index'])->name('accueil');

Route::get('/home', function () {
    return redirect()->route('accueil');
})->name("home");


Route::get('/articles/create', [ArticleController::class, 'create'])
    ->middleware('auth')
    ->name('articles.create');

Route::post('/articles', [ArticleController::class, 'store'])
    ->middleware('auth')
    ->name('articles.store');

Route::get('/articles', [ArticleController::class, 'index'])
    ->name('articles.index');

Route::get('/articles/{article}', [ArticleShowController::class, 'show'])
    ->name('articles.show');

Route::post('/articles/{article}/like', [ArticleLikeController::class, 'toggle'])
    ->middleware('auth')
    ->name('articles.like');

Route::get('/user/{id}', [UserController::class, 'show'])
    ->name('user.show');

Route::post('/user/{id}/follow', [UserController::class, 'follow'])
    ->name('user.follow');

Route::get('/contact', function () {
    return view('contact');
})->name("contact");

Route::get('/test-vite', function () {
    return view('test-vite');
})->name("test-vite");





