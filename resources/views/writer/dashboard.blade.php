<x-layout>

    @if (session('session'))
        <div class="alert alert-success">
            {{ session('session') }}
        </div>
    @endif


    <section class="container my-3">
        <div class="row home-custom">
            <div class="col-12 my-4">

                <h2 class=" my-4 display-5">Bentornato Redattore {{ Auth::user()->name }}</h2>

               



            </div>
        
        </div>

        

    </section>

    <div class="container-fluid">
        <div class="row border-custom">
            <div class="col-12 ">
                <h3 class="text-center my-4">Articoli accettati</h3>
                <x-writerTable :articles="$acceptedArticles" />

            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row border-custom my-5">
            <div class="col-12">
                <h3 class="text-center my-4">Articoli in revisione</h3>

                <x-writerTable :articles="$unrevisionArticles" />

            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row border-custom my-5">
            <div class="col-12">
                <h3 class="text-center my-4">Articoli rifiutati</h3>
                <x-writerTable :articles="$rejectedArticles" />

            </div>
        </div>
    </div>
</x-layout>
