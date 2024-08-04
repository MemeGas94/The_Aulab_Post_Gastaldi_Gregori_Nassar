<x-layout>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center my-4">Olimpiadi Parigi 2024</h1>
        </div>
    </div>
</div>

@if (session('session'))

<div class="alert alert-success">
    {{('Articolo creato con successo')}}
</div>
    
@endif

@if (session('sessionn'))

<div class="alert alert-success">
    {{('mail inviata con successo')}}
</div>
    
@endif

@if (session('alert'))

<div class="alert alert-success">
    {{(session('alert'))}}
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
                      <a href="{{route('Article.show', $article)}}" class="btn btn-primary my-1">Mostra articolo completo</a>
                      <a href="{{ route('Article.byCategory', $article->category) }}" class="btn btn-primary">{{ $article->category->name }}</a>
                      <a href="{{route('Article.byUser', $article->user)}}" class="btn btn-primary">{{$article->user->name}}</a>

                    </div>
                  </div>
                
            </div>
        @endforeach
    </div>
</section>
</x-layout>