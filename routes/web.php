<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

Route::get('/',[PublicController::class,'home'])->name('homepage');
Route::get('/career',[PublicController::class, 'career'])->name('careerpage')->middleware('auth');
Route::post('/career/post', [PublicController::class, 'postcareer'])->name('postcareer');

Route::get('/Article/create',[ArticleController::class,'create'])->name('Article.create')->middleware('auth');
Route::get('/Article/index',[ArticleController::class,'index'])->name('Article.index');
Route::get('/article/show/{article}', [ArticleController::class, 'show'])->name('Article.show');
Route::get('/article/category/{category}', [ArticleController::class, 'byCategory'])->name('Article.byCategory'); 
Route::get('/article/user/{user}', [ArticleController::class, 'byUser'])->name('Article.byUser');
Route::post('/Article/store',[ArticleController::class,'store'])->name('Article.store');

Route::middleware('admin')->group(function(){
    
    Route::get('/Admin/Dashbord',[AdminController::class,'dashboard'])->name('admin.dashboard');

    Route::patch('/admin/{{user}}/set-admin', [AdminController::class,'setAdmin'])->name('admin.setAdmin');
    Route::patch('/revisor/{{user}}/set-revisor', [AdminController::class,'setRevisor'])->name('admin.setRevisor');
    Route::patch('/writer/{{user}}/set-writer', [AdminController::class,'setWriter'])->name('admins.etWriter');

});






