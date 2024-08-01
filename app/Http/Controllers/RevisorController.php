<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function dashboard(){

        $unrevisionArticles = Article::where('is_accepted', NULL)->get();
        $acceptedArticles= Article::where('is_accepted', true)->get();
        $rejectedArticles = Article::where('is_accepted', false)->get();
        return view ('Revisor.dashboard',compact('unrevisionArticles','acceptedArticles','rejectedArticles'));
    }


    public function acceptArticle(Article $article){

        $article->is_accepted=true;
        $article->save();
        return redirect(route('revisor.dashboard'))->with('message', "hai accettato $article->title questo articolo");
    }

    public function rejectArticle(Article $article){

        $article->is_accepted=false;
        $article->save();
        return redirect(route('revisor.dashboard'))->with('message', "Articolo non accettato $article->title");
    }

    public function undoArticle(Article $article){

        $article->is_accepted=NULL;
        $article->save();
        return redirect(route('revisor.dashboard'))->with('message', "articolo non valido $article->title");
    }
}
