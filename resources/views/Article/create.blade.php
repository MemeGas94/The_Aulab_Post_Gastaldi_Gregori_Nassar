<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-4">
            </div>
            <div class="col-12 col-md-8 bg-dark vh-100">

                <form method="POST" action="{{ route('Article.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label text-white">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label text-white">Sottotitolo</label>
                        <input type="text" class="form-control" id="subtitle" name="subtitle">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label text-white">Descrizione</label>
                        <textarea type="text" class="form-control" id="description" name="description"></textarea>
                    </div>

                    <div class="mb-3 text-white">
                        <option selected>Scegli una categoria</option>
                        <select class="form-select" id="category_id" name="category"
                            aria-label="Default select example">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach


                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="cover" class="form-label text-white">Copertina</label>
                        <input type="file" class="form-control" id="cover" name="cover">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>





        </div>
    </div>






</x-layout>
