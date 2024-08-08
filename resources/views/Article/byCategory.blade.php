<x-layout>
    <div>

        <section class="container">
            <div class="row">
                <h1 class="text-center my-4 ">Tutti gli articoli sul {{ $category->name }}</h1>
            </div>
        </section>

        <section class="container">
            <div class="row ">


                @foreach ($articles as $article)
                <div class="col-12 col-md-4  ">
                    <x-card :article="$article" />


                </div>
                @endforeach
            </div>
    </div>
    </section>



    </div>

</x-layout>
