<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;

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

    Route::patch('/admin/set-admin/{user}', [AdminController::class,'setAdmin'])->name('admin.setAdmin');
    Route::patch('/admin/set-revisor/{user}', [AdminController::class,'setRevisor'])->name('admin.setRevisor');
    Route::patch('/admin/set-writer/{user}', [AdminController::class,'setWriter'])->name('admin.setWriter');

});

Route::middleware('revisor')->group(function(){
    Route::get('/Revisor/Dashboard',[RevisorController::class,'dashboard'])->name('revisor.dashboard');
    Route::patch('/Revisor/accept-article/{article}', [RevisorController::class,'acceptArticle'])->name('Revisor.accepted');
    Route::patch('/Revisor/rejected-article/{article}', [RevisorController::class,'rejectArticle'])->name('Revisor.rejected');
    Route::patch('/Revisor/undo_article/{article}', [RevisorController::class,'undoArticle'])->name('Revisor.undo');
});









