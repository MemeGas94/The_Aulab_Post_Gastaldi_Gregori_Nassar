<x-layout>

<h1>ciao</h1>

@if (session('session'))

<div class="alert alert-success">
    {{('Articolo creato con successo')}}
</div>
    
@endif



<section class="container">
    <div class="row">
        @foreach ($articles as $article)
            <div class="col-12 col-md-4">
                <div class="card">

                    <div class="card-body">
                    <img src="{{Storage::url($article->cover)}}" class="card-img-top" alt="...">
                      <h5 class="card-title">{{$article->title}}</h5>
                      <p class="card-text">{{$article->subtitle}}</p>
                      <p class="card-text">{{$article->description}}</p>
                      <a href="{{route('Article.show', $article)}}" class="btn btn-primary">Mostra articolo completo</a>
                      <a href="{{route('Article.byCategory', $article->category)}}" class="btn btn-primary">{{$article->category->name}}</a>
                      <a href="{{route('Article.byUser', $article->user)}}" class="btn btn-primary">{{$article->user->name}}</a>

                    </div>
                  </div>
                
            </div>
        @endforeach
    </div>
</section>
</x-layout>