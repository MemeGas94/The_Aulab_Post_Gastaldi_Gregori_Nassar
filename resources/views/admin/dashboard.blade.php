<x-layout>
    
    @if (session('message'))
    
    <div class="alert alert-success">
    {{(session('message'))}}
    </div>
    
    @endif
    <section class="container-fluid">
        <div class="row">
            <div class="col-12">

                <h2 class="text-center my-5">Bentornato {{Auth::user()->name}}</h2>

                

            </div>
        </div>

    </section>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center my-4">richieste per il ruolo di amministratore</h3>
                <x-tables :roleRequests="$adminRequests" role="amministratore"/>
               
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center my-4">richieste per il ruolo di revisore</h3>
                <x-tables :roleRequests="$revisorRequests" role="revisore"/>
               
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center my-4">richieste per il ruolo di scrittore</h3>
                <x-tables :roleRequests="$writerRequests" role="scrittore"/>
               
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center my-4">Tutti i tags</h3>
                <x-tagsTable :tagTables="$tags" metaType="tags"/>
               
            </div>
        </div>
    </div>


    <div class="justify-content-between">
          <h2 class="text-center my-4">Tutte le categorie</h2>
                <form method="POST" class="w-50 d-flex m-3" action="{{route('admin.storeCategory')}}">
                    @csrf
                    <input type="text" name="name" class="form-control me-2" placeholder="inserisci una nuova categoria">
                    <button class="btn btn-outline-success" type="submit">Inserisci</button>
                </form>
            </div>
                <x-tagsTable :tagTables="$categories" metaType="categorie"/>
               
    </div>
   </div>






</x-layout>