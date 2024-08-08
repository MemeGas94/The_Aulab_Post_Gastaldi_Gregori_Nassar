<x-layout>
    <section class="container my-3">
        <div class="row home-custom">
            <div class="col-12 my-4">
    
                <h2 class="display-5 my-4">Bentornato revisore {{Auth::user()->name}}</h2>
    
                
    
            </div>
        </div>
    
    </section>

    {{-- chiedre come cambiare colore delle tabelle --}}
    
    <div class="container">
        <div class="row">
            <div class="col-12 border-custom my-4">
                <h3 class="text-center">Articoli da revisionare</h3>
                <x-articlesTable :articles="$unrevisionArticles"/>
               
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-12 border-custom my-4">
                <h3 class="text-center">Articoli accettati</h3>
                <x-articlesTable :articles="$acceptedArticles"/>
               
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-12 border-custom my-4">
                <h3 class="text-center">Articoli Respinti</h3>
                <x-articlesTable :articles="$rejectedArticles"/>
               
            </div>
        </div>
    </div>
    
    @if (session('message'))
    
    <div class="alert alert-success">
    {{(session('message'))}}
    </div>
    
    @endif
    
</x-layout>

