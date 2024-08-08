<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;

Route::get('/',[PublicController::class,'home'])->name('homepage');
Route::get('/career',[PublicController::class, 'career'])->name('careerpage')->middleware('auth');
Route::post('/career/post', [PublicController::class, 'postcareer'])->name('postcareer');

Route::get('/Article/index',[ArticleController::class,'index'])->name('Article.index');
Route::get('/article/show/{article}', [ArticleController::class, 'show'])->name('Article.show');
Route::get('/article/category/{category}', [ArticleController::class, 'byCategory'])->name('Article.byCategory'); 
Route::get('/article/user/{user}', [ArticleController::class, 'byUser'])->name('Article.byUser');

Route::middleware('admin')->group(function(){
    
    Route::get('/Admin/Dashbord',[AdminController::class,'dashboard'])->name('admin.dashboard');
    Route::put('/admin/edit/tag/{tag}', [AdminController::class,'editTag'])->name('admin.editTag');
    Route::delete('/admin/delete/tag/{tag}', [AdminController::class,'deleteTag'])->name('admin.deleteTag');
    Route::put('/admin/edit/category/{category}', [AdminController::class,'editCategory'])->name('admin.editCategory');
    Route::delete('/admin/delete/category/{category}', [AdminController::class,'deleteCategory'])->name('admin.deleteCategory');
    Route::post('/admin/category/store',[AdminController::class,'storeCategory'])->name('admin.storeCategory');


    
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

Route::middleware('writer')->group(function(){
    Route::get('/Article/create',[ArticleController::class,'create'])->name('Article.create')->middleware('auth');
    Route::post('/Article/store',[ArticleController::class,'store'])->name('Article.store');
    Route::get('/article/modify/{article}',[ArticleController::class,'modify'])->name('Article.modifyArticle');
    Route::put('/article/update/{article}',[ArticleController::class,'update'])->name('Article.aggiorna');
    Route::delete('/article/delete{article}',[ArticleController::class,'destroy'])->name('Article.destroy');
    
});

Route::get('/Article/search',[ArticleController::class,'articleSearch'])->name('Article.search')->middleware('auth');


Route::middleware('writer')->group(function(){
    Route::get('/writer/Dashboard',[WriterController::class,'dashboard'])->name('writer.dashboard');
    


});
