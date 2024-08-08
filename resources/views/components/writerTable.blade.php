<table class="table">
    <thead>
        <tr>
            <th class="me-5"scope="col">Nr.</th>
            <th scope="col">Titolo</th>
            <th scope="col">Sottotitolo</th>
            <th scope="col">Genere</th>
            <th scope="col">tags</th>
            <th scope="col">inserito il</th>
            <th scope="col">Azioni</th>
        </tr>
    </thead>


    <tbody>
        @foreach ($articles as $article)
            <tr>
                <th scope="row">{{ $article->id }}</th>
                <td>{{ Str::limit($article->title,30) }}</td>
                <td>{{ Str::limit($article->subtitle,50) }}</td>
                <td> {{ $article->category->name ?? 'Nessuna categoria' }}
                    
                </td>

                <td>
                    @foreach ($article->tags as $tag)
                        #{{ Str::limit($tag->name,10)}}
                    @endforeach
                </td>
                <td>{{$article->created_at->format('d/m/y')}}</td>
                <td>
                    @if (!is_null($article->is_accepted))
                        <a href="{{ route('Article.show', $article) }}" class="btn btn-dark ">Leggi</a>
                        <a href="{{ route('Article.modifyArticle', $article) }}" class="btn btn-dark ">Modifica</a>
                    <form method="POST" action="{{ route('Article.destroy', $article) }}" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-dark" type="submit"> Elimina</button>
                        </form>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>

















</table>
