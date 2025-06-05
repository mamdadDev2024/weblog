<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $articles = Article::all();
    return view('welcome' , compact('articles'));
})->name('home');

Route::as('article.')->prefix("article")->group(function () {
    Route::view('create' , 'Article.Create')->name('create');
    Route::post('create' , [ArticleController::class , 'store'])->name('store');
    Route::delete('delete' , [ArticleController::class , 'destroy'])->name('delete');
    Route::get('update/{Article}' , [ArticleController::class,'edit'])->name('edit');
    Route::put('update/{Article}' , [ArticleController::class,'update'])->name('update');
    Route::get('s/{Article}' , [ArticleController::class,'show'])->name('show');
});

Route::as('user')->prefix('user')->group(function () {
    Route::get('update/{User}' , [ArticleController::class,'edit'])->name('edit');
    Route::put('update/{User}' , [ArticleController::class,'update'])->name('update');
    Route::delete('delete' , [ArticleController::class,'destroy'])->name('delete');
    Route::get('{User}' , [ArticleController::class,'show'])->name('show');
});

Route::prefix('auth')->group(function (){
    Route::view('login' , 'Auth.Login')->name('login');
    Route::view('register' , 'Auth.Register')->name('register');
    Route::post('login' , [AuthController::class , 'login'])->name('do_login');
    Route::post('register' , [AuthController::class , 'register'])->name('do_register');
    Route::post('logout' , [AuthController::class ,'logout'])->name('logout');
});
