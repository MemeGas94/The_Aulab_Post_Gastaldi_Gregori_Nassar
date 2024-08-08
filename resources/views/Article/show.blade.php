<x-layout>



    <section class="container">
        <div class="row">
            <h1 class="text-center my-5">Ecco l'articolo completo</h1>
        </div>

        <div class="row">

            <div class="col-12 col-md-6">
                <img class="img-fluid my-5" src="{{ Storage::url($article->cover) }}" alt="...">
            </div>

            <div class="col-12 col-md-5 d-flex flex-column my-5 justify-content-center m-5">
                <h5 class="text-center">{{ $article->title }}</h5>
                <p class="card-text text-center">{{ $article->subtitle }}</p>
                <p class="card-text text-center">{{ $article->description }}</p>
                <p>
                    @foreach($article->tags as $tag)
                    #{{$tag->name}}
                    @endforeach
                </p>
            </div>
        </div>
    </section>

    @if (Auth::user() && Auth::user()->is_revisor)
        <div class="container-fluid">
            <div class="row">
                @if (is_null($article->is_accepted))
                    
                        <form class="col-12 col-md-6 d-flex justify-content-center my-3" method="POST" action="{{ route('Revisor.accepted', $article) }}">
                            @csrf
                            @method('PATCH')
                            <button class="btn btn-dark text-success" type="submit">Accetta articolo</button>
                        </form>
                        
                        
                        <form class="col-12 col-md-6 d-flex justify-content-center my-3" method="POST" action="{{ route('Revisor.rejected', $article) }}">
                            @csrf
                            @method('PATCH')
                            <button class="btn btn-dark text-danger" type="submit">Rifiuta articolo</button>
                        </form>
                    
                        
                @endif
            </div>
        </div>

    @endif


</x-layout>
