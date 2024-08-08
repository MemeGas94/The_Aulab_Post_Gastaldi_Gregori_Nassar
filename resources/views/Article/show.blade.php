<x-layout>



    <section class="container my-3">
        <div class="row home-custom">
            <h1 class="my-4 display-5">Ecco l'articolo completo</h1>
            <p> tempo di lettura {{$article->readDuration()}} min</p>
        </div>

        <div class="row justify-content-evenly border-custom mb-5">

            <div class="col-12 col-md-10">
                
                
                <h2 class="text-center my-5">{{ $article->title }}</h2>
                <hr>
                <h6 class="card-text text-center">{{ $article->subtitle }}</h6>
                <hr>
                <img class="img-fluid img-custom my-5" src="{{ Storage::url($article->cover) }}" alt="...">
                <hr>
                <p class="text-center">
                    @foreach ($article->tags as $tag)
                        #{{ $tag->name }}
                    @endforeach
                </p>
                <hr>
                
                <p class="card-text text-center mb-5">{{ $article->description }}</p>
                
            </div>
        </div>
    
    
    
        @if (Auth::user() && Auth::user()->is_revisor)
            
                <div class="row justify-content-evenly mb-5">
                    @if (is_null($article->is_accepted))
    
                        <form class="col-12 col-md-5 d-flex justify-content-around" method="POST"
                            action="{{ route('Revisor.accepted', $article) }}">
                            @csrf
                            @method('PATCH')
                            <button class="btn btn-success" type="submit">Accetta articolo</button>
                        </form>
    
    
                        <form class="col-12 col-md-5 d-flex justify-content-around" method="POST"
                            action="{{ route('Revisor.rejected', $article) }}">
                            @csrf
                            @method('PATCH')
                            <button class="btn btn-danger" type="submit">Rifiuta articolo</button>
                        </form>
                    @endif
                </div>
            
    
        @endif
    
    
    
    </section>



</x-layout>
