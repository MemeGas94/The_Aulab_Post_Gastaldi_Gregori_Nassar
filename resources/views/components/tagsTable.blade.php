<table class="table table-dark">
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
                <td>{{ count($tagTable->articles) }}</td>
                @if ($metaType == 'tags')
                    <td>
                        <form method="POST" action="{{ route('admin.editTag', ['tag' => $tagTable]) }}">
                            @csrf
                            @method('PUT')
                            <input type="text" value="{{ $tagTable->name }}" name="name" class="form-control">
                            <button class="btn btn-success" type="submit">Aggiorna</button>
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('admin.deleteTag', ['tag' => $tagTable]) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-success" type="submit">Elimina</button>
                        </form>
                    </td>
                @else
                    <td>
                        <form method="POST" action="{{ route('admin.editCategory', ['category' => $tagTable]) }}">
                            @csrf
                            @method('PUT')
                            <input type="text" value="{{ $tagTable->name }}" name="name" class="form-control">
                            <button class="btn btn-success" type="submit">Aggiorna</button>
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('admin.deleteCategory', ['category' => $tagTable]) }}">
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
