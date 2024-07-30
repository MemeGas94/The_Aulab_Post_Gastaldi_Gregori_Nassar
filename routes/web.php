<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/',[PublicController::class,'home'])->name('homepage');
Route::get('/Article/create',[ArticleController::class,'create'])->name('Article.create');
route::post('/Article/store',[ArticleController::class,'store'])->name('Article.store');
Route::get('/Article/index',[ArticleController::class,'index'])->name('Article.index');
