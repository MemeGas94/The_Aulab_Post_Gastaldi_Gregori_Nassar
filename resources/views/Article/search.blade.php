<x-layout>
    
    <section class="container">
        <div class="row">
            <h1 class="text-center display-1">Tutti gli articoli per {{ $query }}</h1>
        </div>
    </section>


    <section class="container">
        <div class="row">
            @foreach ($articles as $article)
                <div class="col-12 col-md-4  ">
                    <x-card :article="$article" />


                </div>
            @endforeach
        </div>
        </container>
</x-layout>
