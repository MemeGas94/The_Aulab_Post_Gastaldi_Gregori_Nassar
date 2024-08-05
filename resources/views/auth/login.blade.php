<x-layout>

    <form method="POST" action="{{route('login')}}">

        @csrf
        
      
    <div class="login-container my-5 w-50" id="login">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{route('login')}}" class="login-form">
                    @csrf
                    <div class="input-group">
                        <label for="email" class="form-label text-light">Indirizzo email</label>
                        <input type="email" class="form-control w-100 rounded-pill" id="email" name="email">
                    </div>
                    <div class="input-group">
                        <label for="password" class="form-label text-light">Password</label>
                        <input type="password" class="form-control w-100 rounded-pill" id="password" name="password">
                    </div>
                    <button class="button" type="submit">Sign In</button>
                  <div class="bottom-text">
                    <p>Don't have an account? <a href="{{route('register')}}">Sign Up</a></p>
                    
                  </div>
                </form>
            </div>
        </div>
    </div>  
  
    </form>


















</x-layout>




