<x-layout>
    <div class="container-fluid">
        <div class="row vh-100">
            <div class="col-12 col-md-4 background-custom">
            </div>

            <div class="col-12 col-md-8 background-article h-100 overflow-scroll overflow-x-hidden">

                <form class="h-100 d-flex flex-column justify-content-around" method="POST"
                    action="{{ route('Article.aggiorna', $article) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="my-3">
                        <label for="title" class="form-label text-white">
                            <h5>Titolo</h5>
                        </label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                            value="{{ $article->title }}" name="title">
                    </div>

                    @error('title')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror

                    <div class="my-3">
                        <label for="subtitle" class="form-label text-white">
                            <h5>Sottotitolo</h5>
                        </label>
                        <input type="text" class="form-control @error('subtitle') is-invalid @enderror" id="subtitle"
                            value="{{ $article->subtitle }}" name="subtitle">
                    </div>

                    @error('subtitle')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror

                    <div class="my-3">
                        <label for="description" class="form-label text-white">
                            <h5>Articolo completo</h5>
                        </label>
                        <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" value="{{$article->description}}">"{{ $article->description }}"</textarea>
                    </div>
                    @error('description')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror

                    <div class="my-3">
                        <label for="tags" class="form-label text-white">
                            <h5>Tag</h5>
                        </label>
                        <input type="text" class="form-control @error('tag') is-invalid @enderror" id="tags"
                            value="{{ $article->tags->implode('name', ',') }}" name="tags">
                    </div>
                    @error('tags')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror

                    <div class="my-3 text-white">
                        <h5>Categorie</h5>
                        <select class="form-select @error('category') is-invalid @enderror" id="category_id"
                            name="category" aria-label="Default select example">
                            
                            {{-- <option  value="" >Scegli una categoria</option> --}}
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @if($article->category_id==$category->id) selected @endif>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    @error('category')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror

                    <div class="my-3">

                        <label> immagine attuale</label>
                        <img src="{{Storage::url($article->cover)}}" alt="{{$article->title}}" class="w-50 d-flex">
                        </div>



                    <div class="my-3">
                        <label for="cover" class="form-label text-white">
                            <h5>Nuova Copertina</h5>
                        </label>
                        <input type="file" class="form-control @error('cover') is-invalid @enderror" id="cover"
                            name="cover">
                    </div>
                    @error('cover')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror

                    <div class="bottom-text">
                        <button class="btn button btn-success my-1" type="submit">Aggiorna articolo</button>
                    </div>
                </form>

            </div>

        </div>
    </div>

</x-layout>
