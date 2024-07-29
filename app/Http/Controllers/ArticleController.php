<?php

namespace App\Http\Controllers;

use App\Models\articles;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create(){
        return view ('Article.create');
    }

    public function store(Request $request){

        $article=articles::create([
            'title'=>$request->title,
            'subtitle'=>$request->subtitle,
            'description'=>$request->description,
            'category'=>$request->category,
            'cover'=>$request->cover,
        ]);
       return redirect(route('homepage'))->with('session','Articolo creato con successo');
    
    }
}
