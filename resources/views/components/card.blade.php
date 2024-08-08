<div class="card-body card my-4 border-custom">
    <img src="{{ Storage::url($article->cover) }}" class="img-card-custom" alt="...">
    <h5 class="card-title text-center my-3">{{ $article->title }}</h5>
    <hr>
    <p class="card-text text-center">{{ $article->subtitle }}</p>

    <section class="d-flex justify-content-evenly">

        <div>
            <a href="{{ route('Article.show', $article) }}" class="btn btn-dark ">Dettaglio</a>

        </div>

        <div>

            @if($article->category)
            <a href="{{route('Article.byCategory', $article->category)}}" class=" btn btn-dark">{{$article->category->name}}</a>
            @else
            <p>Nessuna Categoria</p>
            @endif

        </div>

        <div>

            <a href="{{ route('Article.byUser', $article->user) }}"
                class="btn btn-dark">{{ $article->user->name }}</a>

        </div>

    </section>
    


    <p>
        @foreach ($article->tags as $tag)
            #{{ $tag->name }}
        @endforeach
    </p>
</div>