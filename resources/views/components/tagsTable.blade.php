<table class="table">
    <thead>
        <tr>
            <th scope="col">Nr.</th>
            <th scope="col">Nome Tag</th>
            <th scope="col">Q.ta articoli collegati</th>
            <th scope="col">Aggiorna</th>
            <th scope="col">Cancella</th>
        </tr>
    </thead>


    <tbody>
        @foreach ($tagTables as $tagTable)
            <tr>
                <th scope="row">{{ $tagTable->id }}</th>
                <td>{{ $tagTable->name }}</td>
                <td>{{ count($tagTable->articles )}}</td>
                @if(($metaType =='tags'))
                <td>
                    <form method="POST" action="#">
                        @csrf
                        @method('PUT')
                        <button class="btn btn-success" type="submit">Aggiorna</button>
                    </form>
                </td>
                        <td>
                        <form method="POST" action="#">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-success" type="submit">Elimina </button>
                    </form>
                </td>
                    @endif
            </tr>
        @endforeach
    </tbody>
</table>
