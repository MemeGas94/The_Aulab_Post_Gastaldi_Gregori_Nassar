<x-layout>


    <section class="container my-3">
        <div class="row home-custom">
            <h1 class="my-4 display-5">Ultimi articoli aggiornati</h1>
        </div>
        <div class="row">

            @foreach ($articles as $article)
            <div class="col-12 col-md-4  ">
                <x-card :article="$article" />


            </div>
            @endforeach
        </div>
    </section>



</x-layout>
