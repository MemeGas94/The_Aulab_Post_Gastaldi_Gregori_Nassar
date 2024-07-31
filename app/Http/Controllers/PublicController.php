<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home(){
        $articles=Article::orderby('created_at','desc')->take(3)->get();
        return view('welcome', compact('articles'));
    }

    public function career(){
        return view('careerpage');
    }

    public function postcareer(Request $request){
        $request->validate([
            'email'=>'required',
            'role'=>'required',
            'messagge-presentation'=>'required',
        ]);
    }
}
