<x-layout>

<h1>Ultimi articoli aggiornati</h1>

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
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                
            </div>
        @endforeach
    </div>
</section>





</x-layout>