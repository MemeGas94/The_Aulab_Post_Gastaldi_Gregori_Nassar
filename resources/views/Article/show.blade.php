<x-layout>



    <section class="container">
        <div class="row">
            <h1 class="text-center my-5">Ecco l'articolo completo</h1>

            <img class="my-5" src="{{ Storage::url($article->cover) }}" alt="...">
            <h5 class="display-1 text-center">{{ $article->title }}</h5>
            <p class="card-text text-center">{{ $article->subtitle }}</p>
            <p class="card-text text-center">{{ $article->description }}</p>
            <p>
                @foreach($article->tags as $tag)
                #{{$tag->name}}
                @endforeach
            </p>
        </div>
    </section>

    @if (Auth::user() && Auth::user()->is_revisor)
        <div class="container-fluid">
            <div class="row">
                @if (is_null($article->is_accepted))
                    
                        <form class="col-12 col-md-6 d-flex justify-content-center my-3" method="POST" action="{{ route('Revisor.accepted', $article) }}">
                            @csrf
                            @method('PATCH')
                            <button class="btn btn-success" type="submit">Accetta articolo</button>
                        </form>
                        
                        
                        <form class="col-12 col-md-6 d-flex justify-content-center my-3" method="POST" action="{{ route('Revisor.rejected', $article) }}">
                            @csrf
                            @method('PATCH')
                            <button class="btn btn-danger" type="submit">Rifiuta articolo</button>
                        </form>
                    
                        
                @endif
            </div>
        </div>

    @endif


</x-layout>
