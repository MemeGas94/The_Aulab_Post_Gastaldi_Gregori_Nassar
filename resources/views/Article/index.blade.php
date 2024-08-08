<x-layout>


    <section class="container">
        <div class="row">
            <h1 class="text-center my-4">Ultimi articoli aggiornati</h1>
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
