<x-layout>

<h1>ciao</h1>

@if (session('session'))

<div class="alert alert-success">
    {{('Articolo creato con successo')}}
</div>
    
@endif

</x-layout>