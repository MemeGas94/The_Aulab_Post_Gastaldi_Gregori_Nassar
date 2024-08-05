<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center my-4">Olimpiadi Parigi 2024</h1>
            </div>
        </div>
    </div>

    {{-- sezione video --}}

    <section>

        <article class="sectionVideo">

            <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
            <div class="overlay"></div>

            <!-- The HTML5 video element that will create the background video on the header -->
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="/media/video/Paris.mp4" type="video/mp4">
            </video>

           
        </article>


    </section>

    {{-- fine sezione video --}}

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
