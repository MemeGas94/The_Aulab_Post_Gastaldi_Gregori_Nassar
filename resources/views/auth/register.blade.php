<x-layout>



    <div class="login-container my-5">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{ route('register') }}" class="login-form">
                    @csrf
                    <div>
                        <label for="name" class="form-label p-3 text-light">Nome utente</label>
                        <input type="text" class="form-control w-100" id="name" name="name">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>
                    <div>
                        <label for="email" class="form-label p-3 text-light">Indirizzo email</label>
                        <input type="email" class="form-control w-100" id="email" name="email">
                    </div>
                    @error('email')
                        {{ $message }}
                    @enderror
                    <div>
                        <label for="password" class="form-label p-3 text-light">Password</label>
                        <input type="password" class="form-control w-100" id="password" name="password">
                    </div>
                    @error('password')
                        {{ $message }}
                    @enderror
                    <div>
                        <label for="password_confirmation" class="form-label p-3 text-light">Conferma Password</label>
                        <input type="password" class="form-control w-100" id="password_confirmation"
                            name="password_confirmation">
                    </div>
                    <button class="button" type="submit">Sign Up</button>
                    <div class="bottom-text">
                        <p>have an account? <a href="{{ route('login') }}">Login</a></p>
                    </div>
                    @error('password')
                        {{ $message }}
                    @enderror
                </form>
            </div>
        </div>
    </div>












</x-layout>
