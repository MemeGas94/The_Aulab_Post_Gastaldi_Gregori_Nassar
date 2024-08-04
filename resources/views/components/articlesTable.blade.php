<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
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
                <td>{{ $article->category->name }}</td>
                <td>

                    @if (is_null($article->is_accepted))
                        <a href="{{ route('Article.show', $article) }}" class="btn btn-primary ">Leggi articolo</a>
                    @else
                        <form method="POST" action="{{ route('Revisor.undo', $article) }}"></form>
                        @csrf

                        <button class="btn btn-primary" type="submit">riporta in revisione </button>
                        <a href="{{ route('Article.show', $article) }}" class="btn btn-primary ">Leggi articolo</a>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
