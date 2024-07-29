<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Ultime Notizie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Lavora con noi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">inserisci articolo</a>
          </li>
         @guest
          <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}">Register</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Login</a>
          </li>
          @endguest

          @auth

          <li class="nav-item">
            <a class="nav-link" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
          </li>

          <form method="POST" id="form-logout" action="{{route('logout')}}">

            @csrf
            
            
            
           
          </form>
    
              
          @endauth

        </ul>
      </div>
    </div>
  </nav>