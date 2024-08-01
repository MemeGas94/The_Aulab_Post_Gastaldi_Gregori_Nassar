<x-layout>


    
    <section class="container">
        <div class="row">
            <h1>Ecco l'articolo completo</h1>
            
            <img src="{{Storage::url($article->cover)}}" class="" alt="...">
            <h5 class=display-1 >{{$article->title}}</h5>
            <p class="card-text">{{$article->subtitle}}</p>
            <p class="card-text">{{$article->description}}</p>
        </div>
    </section>

        @if(Auth::user()&& Auth::user()->is_revisor) 
            <div class="container">
                <div class="row">
                    <div class="col-12 md-4">

                        <form method="POST" action="{{route('Revisor.accepted',$article)}}">
                            @csrf
                            @method('PATCH')
                            <button class="btn btn-success" type="submit">Accetta articolo</button>
                        </form>

                        <form method="POST" action="{{route('Revisor.rejected',$article)}}">
                            @csrf
                            @method('PATCH')
                            <button class="btn btn-danger" type="submit">Riuta articolo</button>
                        </form>

                    </div>
                </div>
            </div>
            
        @endif


</x-layout>