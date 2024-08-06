<x-layout>

    <section class="container-fluid">
        <div class="row">
            <h1 class="text-center my-4 ">Tutti gli articoli sul {{$category->name}}</h1>
        </div>
    </section>

     <section class="container-fluid ">
        <div class="row ">
            
            
            @foreach ($articles as $article)
            <div class="col-12 col-md-3 card ms-5 ">
                <div class="card-body">
                <h5 class="card-title text-center">{{$article->title}}</h5>
                <img src="{{Storage::url($article->cover)}}" class="card-img-top" alt="...">
                  <p class="card-text text-center">{{$article->subtitle}}</p>
                  <a href="{{route('Article.show', $article)}}" class="btn btn-primary my-2 d-flex justify-content-center">Mostra articolo completo</a>
                  <p>
                    @foreach($article->tags as $tag)
                    #{{$tag->name}}
                    @endforeach
                </p>
                
              </div>
                @endforeach
            </div>
        </div>
    </section>

</x-layout>