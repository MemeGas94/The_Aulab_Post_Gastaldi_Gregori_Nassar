<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function create(){
        $categories=Category::all();
        return view ('Article.create', compact('categories'));
    }

    public function store(Request $request){

        $article=Article::create([
            'title'=>$request->title,
            'subtitle'=>$request->subtitle,
            'description'=>$request->description,
            'category_id'=>$request->category,
            'cover'=>$request->cover,
            'user_id'=>Auth::user()->id,
        ]);
       return redirect(route('homepage'))->with('session','Articolo creato con successo');
    
    }
    public function index(){
        $articles=Article::orderBy('created_at','desc')->get();
        return view ('Article.index', compact('articles'));
    }


}
