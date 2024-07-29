<x-layout>


    <form method="POST" action="{{route('Article.store')}}">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Titolo</label>
          <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
          <label for="subtitle" class="form-label">Sottotitolo</label>
          <input type="text" class="form-control" id="subtitle" name="subtitle">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Corpo del testo</label>
            <input type="text" class="form-control" id="description" name="description">
          </div>
          <div class="mb-3">
            <label for="category" class="form-label">Categoria</label>
            <input type="text" class="form-control" id="category" name="category">
          </div>
          <div class="mb-3">
            <label for="cover" class="form-label">Copertina</label>
            <input type="file" class="form-control" id="cover" name="cover">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
     </form>




</x-layout>