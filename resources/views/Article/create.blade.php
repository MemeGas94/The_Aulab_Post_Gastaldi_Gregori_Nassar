<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-4 background-custom">
            </div>

            <div class="col-12 col-md-8 background-article vh-100">
                <form method="POST" action="{{ route('Article.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="my-3">
                        <label for="title" class="form-label text-white">
                            <h5>Titolo</h5>
                        </label>
                        <input  type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title">
                    </div>
                    @error('title')
                        {{ $message }}
                    @enderror

                    <div class="my-3">
                        <label for="subtitle" class="form-label text-white">
                            <h5>Sottotitolo</h5>
                        </label>
                        <input type="text" class="form-control" id="subtitle" name="subtitle">
                    </div>
                    @error('subtitle')
                        {{ $message }}
                    @enderror

                    <div class="my-3">
                        <label for="description" class="form-label text-white">
                            <h5>Articolo completo</h5>
                        </label>
                        <textarea type="text" class="form-control" id="description" name="description"></textarea>
                    </div>
                    @error('description')
                        {{ $message }}
                    @enderror

                    <div class="my-3">
                        <label for="tags" class="form-label text-white">
                            <h5>Tag</h5>
                        </label>
                        <input type="text" class="form-control" id="tags" name="tags"
                            value="{{ old('tags') }}">
                    </div>
                    @error('tags')
                        {{ $message }}
                    @enderror

                    <div class="my-3 text-white">
                        <h5>Categorie</h5>
                        <select class="form-select" id="category_id" name="category"
                            aria-label="Default select example">

                            <option selected>Scegli una categoria</option>

                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('category')
                        {{ $message }}
                    @enderror

                    <div class="my-3">
                        <label for="cover" class="form-label text-white">
                            <h5>Copertina</h5>
                        </label>
                        <input type="file" class="form-control" id="cover" name="cover">
                    </div>
                    @error('cover')
                        {{ $message }}
                    @enderror
                    
                    <div class="bottom-text">
                        <button class="btn button my-1" type="submit">Submit</button>
                    </div>
                </form>

            </div>





        </div>
    </div>






</x-layout>
