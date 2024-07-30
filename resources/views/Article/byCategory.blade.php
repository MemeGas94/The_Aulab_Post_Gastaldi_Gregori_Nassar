<x-layout>

    <section class="container">
        <div class="row">
            <h1>{{$category->name}}</h1>
        </div>
    </section>

     <section class="container my-5">
        <div class="row">
            <div class="col-12">
               @foreach ($articles as $article)
                <img src="{{Storage::url($article->cover)}}" class="" alt="...">
                <h5 class=display-1 >{{$article->title}}</h5>
                <p class="card-text">{{$article->subtitle}}</p>
                <p class="card-text">{{$article->description}}</p>
                @endforeach
            </div>
        </div>
    </section>

</x-layout>