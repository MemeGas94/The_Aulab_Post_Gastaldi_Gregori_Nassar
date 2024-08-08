<table class="table">
    <thead>
        <tr>
            <th class="me-5" scope="col">Nr.</th>
            <th scope="col">Titolo</th>
            <th scope="col">Sottotitolo</th>
            <th scope="col">Genere</th>
            <th scope="col">Azioni</th>
        </tr>
    </thead>


    <tbody>
        @foreach ($articles as $article)
            <tr>
                <th scope="row">{{ $article->id }}</th>
                <td>{{ $article->title }}</td>
                <td>{{ $article->subtitle }}</td>
                @if ($article->category)
                <td>{{ $article->category->name }}</td>
                @else
                <td>Nessuna Categoria</td>
                @endif
                <td>

                    @if (is_null($article->is_accepted))
                        <a href="{{ route('Article.show', $article) }}" class="btn btn-dark ">Leggi articolo</a>
                    @else
                        <form method="POST" action="{{route('Revisor.undo', $article)}}">
                        @csrf
                        @method('PATCH')
                        <button class="btn btn-dark" type="submit">Riporta in revisione </button>
                    </form>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
