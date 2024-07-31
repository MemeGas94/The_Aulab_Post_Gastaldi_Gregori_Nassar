<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/',[PublicController::class,'home'])->name('homepage');
Route::get('/career',[PublicController::class, 'career'])->name('careerpage')->middleware('auth');

Route::get('/Article/create',[ArticleController::class,'create'])->name('Article.create')->middleware('auth');
Route::post('/Article/store',[ArticleController::class,'store'])->name('Article.store');
Route::get('/Article/index',[ArticleController::class,'index'])->name('Article.index');
Route::get('/article/show/{article}', [ArticleController::class, 'show'])->name('Article.show');
Route::get('/article/category/{category}', [ArticleController::class, 'byCategory'])->name('Article.byCategory'); 
Route::get('/article/user/{user}', [ArticleController::class, 'byUser'])->name('Article.byUser');
