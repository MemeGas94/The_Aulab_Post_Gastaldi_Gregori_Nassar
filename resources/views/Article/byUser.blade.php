<x-layout>


    <section class="container">
        <div class="row">
            <h1>Articoli inseriti da {{$user->name}}</h1>
        </div>
    </section>

     <section class="container my-5">
        <div class="row">
            @foreach ($articles as $article)
            <div class="col-12 col-md-3 card mx-5 my-5">
                <div class="card">
                    <h5 class="card-title">{{$article->title}}</h5>
                    <img src="{{Storage::url($article->cover)}}" class="card-img-top" alt="...">
                      <p class="card-text">{{$article->subtitle}}</p>
                      <a href="{{route('Article.show', $article)}}" class="btn btn-primary my-2">Mostra articolo completo</a>
                      <a href="{{route('Article.byCategory', $article->category)}}" class="btn btn-primary">{{$article->category->name}}</a>
                      <a href="{{route('Article.byUser', $article->user)}}" class="btn btn-primary">{{$article->user->name}}</a>
                      <p>
                        @foreach($article->tags as $tag)
                        #{{$tag->name}}
                        @endforeach
                    </p>
            </div>
        </div>
            @endforeach
        </div>
    </section>



</x-layout>