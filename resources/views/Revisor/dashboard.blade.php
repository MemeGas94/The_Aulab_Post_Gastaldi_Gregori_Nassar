<x-layout>
    <section class="container-fluid">
        <div class="row">
            <div class="col-12">
    
                <h2 class="text-center">Bentornato revisore {{Auth::user()->name}}</h2>
    
                
    
            </div>
        </div>
    
    </section>

    {{-- chiedre come cambiare colore delle tabelle --}}
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Articoli da revisionare</h3>
                <x-articlesTable :articles="$unrevisionArticles"/>
               
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Articoli accettati</h3>
                <x-articlesTable :articles="$acceptedArticles"/>
               
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Articoli Respinti</h3>
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

