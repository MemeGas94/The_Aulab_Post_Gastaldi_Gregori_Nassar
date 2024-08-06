<x-layout>


    <section class="container">
        <div class="row">
            <h1 class="text-center my-4">Ultimi articoli aggiornati</h1>
        </div>
        <div class="row">

            @foreach ($articles as $article)
                <div class="col-12 col-md-4">

                    <div class="card-body card my-4">
                        <img src="{{ Storage::url($article->cover) }}" class="img-card-custom" alt="...">
                        <h5 class="card-title text-center">{{ $article->title }}</h5>
                        <p class="card-text text-center">{{ $article->subtitle }}</p>

                        <section class="d-flex justify-content-evenly">

                            <div>
                                <a href="{{ route('Article.show', $article) }}" class="btn btn-dark ">Dettaglio</a>
    
                            </div>
    
                            <div>
    
                                <a href="{{ route('Article.byCategory', $article->category) }}"
                                    class="btn btn-dark">{{ $article->category->name }}</a>
    
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

                </div>
            @endforeach
        </div>
    </section>





</x-layout>
