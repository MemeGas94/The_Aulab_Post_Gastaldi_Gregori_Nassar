<x-layout>


    <section class="container">
        <div class="row">
            <h1>{{$user->name}}</h1>
        </div>
    </section>

     <section class="container my-5">
        <div class="row">
            @foreach ($articles as $article)
            <div class="col-12">
                <img src="{{Storage::url($article->cover)}}" class="" alt="...">
                <h5 class=display-1 >{{$article->title}}</h5>
                <p class="card-text">{{$article->subtitle}}</p>
                <p class="card-text">{{$article->description}}</p>
            </div>
            @endforeach
        </div>
    </section>



</x-layout>