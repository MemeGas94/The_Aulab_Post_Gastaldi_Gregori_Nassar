<x-layout>
    <div class="container-fluid sectionVideo">
        <div class="row overlay">
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="/media/video/Paris.mp4" type="video/mp4">
            </video>

            <div class="text-custom">
                <h1 class="text-center text-white fs-1">Olimpiadi Parigi 2024</h1>
            </div>

        </div>
    </div>
   

    @if (session('session'))
        <div class="alert alert-success">
            {{ 'Articolo creato con successo' }}
        </div>
    @endif

    @if (session('sessionn'))
        <div class="alert alert-success">
            {{ 'mail inviata con successo' }}
        </div>
    @endif

    @if (session('alert'))
        <div class="alert alert-success">
            {{ session('alert') }}
        </div>
    @endif



    <section class="container">
        <div class="row">
            @foreach ($articles as $article)
                <div class="col-12 col-md-4">
                    <div class="card">

                        
                        <div class="card my-5">
                            <svg>
                                <img src="{{ Storage::url($article->cover) }}" class="card-img-top" alt="...">
                                
                            </svg>
                            <div class="card__content">
                                <p class="card__title">{{ $article->title }}</p>
                                <p class="card__description">{{ $article->subtitle }}</p>
                                <a href="{{ route('Article.show', $article) }}" class="btn btn-primary my-1">Mostra articolo
                                    completo</a>
                            </div>
                        </div>


                        
                    </div>

                </div>
            @endforeach
        </div>
    </section>
</x-layout>
