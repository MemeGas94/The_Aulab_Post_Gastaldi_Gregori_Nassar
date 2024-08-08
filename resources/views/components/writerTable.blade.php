<table>
    <thead>
        <tr>
            <th scope="col">Nr.</th>
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
                <th class="mx-3" scope="row">{{ $article->id }}</th>
                <td class=" mx-3">{{ $article->title }}</td>
                <td class=" mx-3">{{ $article->subtitle }}</td>
                <td class="mx-33"> {{ $article->category->name ?? 'Nessuna categoria' }}
                    {{-- <p>
                    @if ($article->category)
                        <a href="{{ route('Article.byCategory', $article->category) }}"
                            class="btn btn-dark">{{ $article->category->name }}</a>
                    @else
                        <p>Nessuna Categoria</p>
                    @endif --}}
                </td>

                <td>
                    @foreach ($article->tags as $tag)
                        #{{ $tag->name }}
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
