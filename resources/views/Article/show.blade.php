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

            
    


</x-layout>