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
    
    <div class="container">
        <div class="row">
            <h3>
                I GIOCHI OLIMPICI DELL’ANTICHITÀ
            </h3>

            <div class="col-12 col-md-4">
                <p>
I Giochi olimpici, celebrati in onore di Zeus nella città sacra di Olimpia ogni quattro anni nei mesi estivi, erano i più antichi e i più solenni fra i quattro giochi panellenici celebrati dai Greci. Gli altri erano i Giochi pitici, in onore di Apollo Pitio, che si celebravano a Delfi il terzo anno da ciascuna Olimpiade (cioè il periodo tra due Giochi olimpici); i Giochi nemei, in onore di Archemoro, figlio del re di Nemea, che si celebravano ogni secondo e quarto anno dall’Olimpiade; i Giochi istmici, in onore di Posidone, che si celebravano anche questi ogni due anni sull’istmo di Corinto. Vi era poi anche una serie di giochi minori di carattere locale, i più importanti dei quali erano i Giochi panatenaici che si svolgevano ad Atene, a partire dal 566 a.C., in onore di Atena Pallade.

La cronologia dei Giochi olimpici inizia con l’anno 776 a.C. anche se la loro origine è probabilmente più antica. Inizialmente, si disputavano solo diversi tipi di corse podistiche alle quali si aggiunsero poi pentathlon, pugilato, corse con i cavalli, quelle armate, quelle con i carri e il pancrazio (unione di pugilato e lotta). Alle gare non erano ammessi stranieri, schiavi e persone disonorate. Le donne, alle quali era vietato persino assistere alle gare (almeno fino al 396 a.C.), organizzavano ad Argo, sin dal 6° secolo a.C., propri Giochi, detti erei perché dedicati a Era. I Giochi olimpici raggiunsero l’apice verso la fine del 5° secolo a.C. e proseguirono per tutta l’epoca romana, fino al 393 d.C., quando furono vietati dall’imperatore romano cristianizzato Teodosio I perché ritenuti uno spettacolo pagano.
                </p>

            </div>

            <div class="story-image col-12 col-md-4">
                <img src="media" alt="">

            </div>
        </div>
    </div>


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
