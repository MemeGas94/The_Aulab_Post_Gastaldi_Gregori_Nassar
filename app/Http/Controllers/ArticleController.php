<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{

    public function create()
    {
        return view('Article.create');
    }

    public function store(Request $request)

    {

        $request->validate([
            'title' => 'required|unique:articles|min:5',
            'subtitle' => 'required|min:5',
            'description' => 'required|min:10|max:1000',
            'cover' => 'required|image',
            'category' => 'required',
            'tags' => 'required',
        ]);


        $article = Article::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'category_id' => $request->category,
            'cover' => $request->file('cover')->store('public/images'),
            'user_id' => Auth::user()->id,
        ]);
        
        $tags = explode(',', $request->tags);
        foreach ($tags as $i => $tag) {
            $tags[$i] = trim($tag);
        }

        foreach ($tags as $tag) {
            $newTag = Tag::updateOrCreate([
                'name' => strtolower($tag)
            ]);
            $article->tags()->attach($newTag);
        }


        return redirect(route('homepage'))->with('session', 'Articolo creato e mandato in revisione');
    }

    public function index()
    {

        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->get();
        return view('Article.index', compact('articles'));
    }
    public function show(Article $article)
    {

        return view('Article.show', compact('article'));
    }

    public function byCategory(Category $category)
    {
        $articles = $category->articles()->where('is_accepted', true)->orderBy('created_at', 'desc')->get();
        return view('Article.byCategory', compact('category', 'articles'));
    }

    public function byUser(User $user)
    {
        $articles = $user->articles()->where('is_accepted', true)->orderBy('created_at', 'desc')->get();
        return view('Article.byUser', compact('user', 'articles'));
    }

    public function articleSearch(Request $request)
    {
        $query = $request->input('query');
        $articles = Article::search($query)->where('is_accepted', true)->orderBy('created_at', 'desc')->get();
        return view('Article.search', compact('articles', 'query'));
    }

    public function modify(Article $article)
    {
        if(!is_null($article->is_accepted)){
            $article->is_accepted=NULL;
            $article->save();
        }
    
        if (Auth::user()->id == $article->user_id) {
            return view('Article.edit', compact('article'));
        }
        return redirect()->back()->with('session', 'non sei autorizzato');
    }

    public function update(Request $request, Article $article)
    {

        $request->validate([
            'title' => 'required|min:5|unique:articles,title,' . $article->id,
            'subtitle' => 'required|min:5',
            'description' => 'required|min:10|max:1000',
            'cover' => 'image',
            'category' => 'required',
            'tags' => 'required',
        ]);


        $article->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'category_id' => $request->category,
        ]);
        if ($request->cover) {
            Storage::delete($article->cover);
            $article->update([
                'cover' => $request->file('cover')->store('public/images')
            ]);
        }
       

        $tags = explode(',', $request->tags);
        foreach ($tags as $i => $tag) {
            $tags[$i] = trim($tag);
        }
        $newTag = [];

        foreach ($tags as $tag) {
            $newTag = Tag::updateOrCreate([
                'name' => strtolower($tag)
            ]);
            $newTags[] = $newTag->id;;
        }
        $article->tags()->sync($newTags);

        return redirect(route('writer.dashboard'))->with('session', 'Articolo inoltrato al revisore con successo');
    }


    public function destroy(Article $article){
        foreach ($article->tags as $tag) {
            $article->tags()->detach($tag);
         }
         $article->delete();
         return redirect(route('writer.dashboard'))->with('session', 'Articolo eliminato con successo');
    }
}
