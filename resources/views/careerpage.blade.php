<x-layout>
    <div class="container my-5 login">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <form method="POST" action="{{ route('postcareer') }}" class="login-form">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="email" class="form-label text-center p-3 text-dark">Email</label>
                        <input type="email" value="{{ Auth::user()->email }}" aria-describedby="emailHelp" class="form-control w-100" id="email" name="email">
                    </div>                                   
                    @error('email')
                        {{ $message }}
                    @enderror

                    <div class="mb-3">
                        <label for="description" class="form-label p-3 text-dark">Messaggio di presentazione</label>
                        <textarea type="text" class="form-control w-100" id="messagge-presentation" name="text"></textarea>
                        @error('text')
                        {{ $message }}
                    @enderror
                </div>
                
                <div>
                    <option selected class="form-label p-3 text-dark">Scegli un ruolo</option>
                    <select class="form-select" id="role" name="role" aria-label="Default select example">
                        <option value="admin">Admin</option>
                        <option value="revisor">Revisor</option>
                        <option value="writer">Writer</option>
                    </select>
                    
                    <div class="bottom-text">
                        <button class="btn button my-3" type="submit">Candidati</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
