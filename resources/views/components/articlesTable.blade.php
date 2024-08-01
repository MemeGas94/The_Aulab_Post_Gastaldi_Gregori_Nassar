<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titolo</th>
        <th scope="col">Sottotitolo</th>
        <th scope="col">Genere</th>
      </tr>
    </thead>


    <tbody>
     @foreach ($articles as $article)
          <tr>
            <th scope="row">{{ $article->title }}</th>
            <td>{{ $article->subtitle }}</td>
            <td>{{ $article->category }}</td>
            <td>
          </tr>

          @if (is_null($article->is_accepted))
          
          <a href="{{route('Article.show',$article)}}" class="btn btn-primary ">accetta articolo</a>
            
          @else

          <form method="POST" action="{{route('Revisor.undo',$article)}}"></form>
          @csrf

          <button class="btn" type="submit">riporta in revisione </button>
          @endif
     @endforeach
    </tbody>
  </table>