<x-layout>


    <form method="POST" action="{{route('Article.store')}}" enctype="multipart/form-data">
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
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="text" class="form-control" id="description" name="description"></textarea>
          </div>

          <div class="mb-3">
            <option selected>Scegli una categoria</option>
            <select class="form-select"  id="category_id"  name="category" aria-label="Default select example">
              @foreach ($categories as $category)
              <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach

    
            </select>
          </div>

          <div class="mb-3">
            <label for="cover" class="form-label">Copertina</label>
            <input type="file" class="form-control" id="cover" name="cover">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
     </form>




</x-layout>