<x-layout>
    <section class="container">
        <div class="row">
            <h1 class="text-center display-1">Tutti gli articoli per {{$query}}</h1>
        </div>
    </section>


    <section class="container">
        <div class="row">
    @foreach ($articles as $article)
    <div class="col-12 col-md-3 card mx-5">
      <img src="{{Storage::url($article->cover)}}" class="card-img-top" alt="...">
      <div class="card-body">

          <h5 class="card-title">{{$article->title}}</h5>
          <p class="card-text">{{$article->subtitle}}</p>
          <a href="{{route('Article.byCategory', $article->category)}}" class="btn btn-primary">{{$article->category->name}}</a>
          <a href="{{route('Article.byUser', $article->user)}}" class="btn btn-primary">{{$article->user->name}}</a>
          <a href="{{route('Article.show', $article)}}" class="btn btn-primary my-2">Mostra articolo completo</a>
      </div>
    </div>
        @endforeach
    </div>
  </container>
</x-layout>


