<x-layout>
    <div class="login-container my-5">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{ route('postcareer') }}" class="login-form">
                    @csrf
                    
                    <div class="input-group">
                        <label for="email" class="form-label text-center p-3 text-light">Email</label>
                        <input type="email" value="{{ Auth::user()->email }}" aria-describedby="emailHelp" class="form-control w-100" id="email" name="email">
                    </div>                                   
                    @error('email')
                        {{ $message }}
                    @enderror

                    <div class="input-group mb-3">
                        <label for="description" class="form-label p-3 text-light">Messaggio di presentazione</label>
                        <textarea type="text" class="form-control w-100" id="messagge-presentation" name="text"></textarea>
                        @error('text')
                        {{ $message }}
                    @enderror

                    <div>
                        <option selected class="form-label p-3 text-light">Scegli un ruolo</option>
                    <select class="form-select" id="role" name="role" aria-label="Default select example">
                        <option value="admin">Admin</option>
                        <option value="revisor">Revisor</option>
                        <option value="writer">Writer</option>
                    </select>

                    <button class="btn button mb-3" type="submit">Submit</button>
                    <div class="bottom-text">
                </form>
            </div>
        </div>
    </div>


</x-layout>
