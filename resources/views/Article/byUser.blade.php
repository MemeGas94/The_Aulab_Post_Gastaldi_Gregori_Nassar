<x-layout>

    <div class="vh-100">
        <section class="container-fluid">
            <div class="row">
                <h1 class="text-center my-4 ">Articoli inseriti da {{ $user->name }}</h1>
            </div>
        </section>

        <section class="container-fluid ">
            <div class="row ">


                @foreach ($articles as $article)
                    <div class="col-12 col-md-3 card ms-5 mb-5 ">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ $article->title }}</h5>
                            <img src="{{ Storage::url($article->cover) }}" class="card-img-top" alt="{{ $article->title }}">
                            <p class="card-text text-center">{{ $article->subtitle }}</p>
                            <a href="{{ route('Article.show', $article) }}"
                                class="btn btn-dark my-2 d-flex justify-content-center">Mostra articolo completo</a>
                            <p>
                                @if ($article->category)
                                    <a href="{{ route('Article.byCategory', $article->category) }}"
                                        class="btn btn-dark">{{ $article->category->name }}</a>
                                @else
                                    <p>Nessuna Categoria</p>
                                @endif
                                @foreach ($article->tags as $tag)
                                    #{{ $tag->name }}
                                @endforeach
                            </p>

                        </div>
                    </div>
                @endforeach
            </div>
    </div>
    </section>


</x-layout>
