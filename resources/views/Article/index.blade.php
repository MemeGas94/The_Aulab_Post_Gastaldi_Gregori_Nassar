<x-layout>

    <h1 class="text-center my-4">Ultimi articoli aggiornati</h1>

    <section class="container">
        <div class="row">
            @foreach ($articles as $article)
                <div class="col-12 col-md-4">
                    <div class="card">


                        <div class="card-body">
                            <img src="{{ Storage::url($article->cover) }}" class="card-img-top" alt="...">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">{{ $article->subtitle }}</p>
                            <a href="{{ route('Article.show', $article) }}" class="btn btn-primary">Mostra articolo
                                completo</a>
                            <a href="{{ route('Article.byCategory', $article->category) }}"
                                class="btn btn-primary">{{ $article->category->name }}</a>
                            <a href="{{ route('Article.byUser', $article->user) }}"
                                class="btn btn-primary">{{ $article->user->name }}</a>

                                <p>
                                    @foreach($article->tags as $tag)
                                    #{{$tag->name}}
                                    @endforeach
                                </p>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </section>





</x-layout>
