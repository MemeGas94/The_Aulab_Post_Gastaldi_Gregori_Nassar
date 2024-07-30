<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

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
        ]);
       return redirect(route('homepage'))->with('session','Articolo creato con successo');
    
    }
}
