<x-layout>




    <div class="login-container my-5 w-50">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{ route('login') }}" class="login-form">
                    @csrf
                    <div>
                        <label for="email" class="form-label text-light">Indirizzo email</label>
                        <input type="email" class="form-control w-100" id="email" name="email">
                    </div>
                    @error('email')
                        {{ $message }}
                    @enderror
                    <div>
                        <label for="password" class="form-label text-light">Password</label>
                        <input type="password" class="form-control w-100" id="password" name="password">
                    </div>

                    
                    {{-- chiedere assistenza perchè il my-* se cambiato sposta tutto il footer  --}}
                    
                    <button class="button my-5" type="submit">Sign In</button>
                    <div class="text-light">
                        <p>Don't have an account? <a href="{{ route('register') }}">Sign Up</a></p>
                        
                    </div>
                    @error('password')
                        {{ $message }}
                    @enderror
                </form>
            </div>
        </div>
    </div>



















</x-layout>
