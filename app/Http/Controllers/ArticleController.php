<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller 
{
    
    public function create(){
        return view ('Article.create');
    }

    public function store(Request $request){

        $article=Article::create([
            'title'=>$request->title,
            'subtitle'=>$request->subtitle,
            'description'=>$request->description,
            'category_id'=>$request->category,
            'cover'=>$request->file('cover')->store('public/images'),
            'user_id'=>Auth::user()->id,
        ]);
       return redirect(route('homepage'))->with('session','Articolo creato con successo');
    
    }
    public function index(){
        $articles=Article::orderBy('created_at','desc')->get();
        return view ('Article.index', compact('articles'));
    }

    public function show(Article $article){

        return view ('Article.show', compact('article'));
    }

    public function byCategory(Category $category){
        $articles=$category->articles()->orderBy('created_at','desc')->get();
        return view ('Article.byCategory', compact('category','articles'));
    }

    public function byUser(User $user){
        $articles=$user->articles()->orderBy('created_at','desc')->get();
        return view ('Article.byUser', compact('user','articles'));
    }


}
