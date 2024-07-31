<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('Article.index')}}">Tutti gli Articoli</a>
          </li> 

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categorie
            </a>
            <ul class="dropdown-menu">
              @foreach ($categories as $category)
              <li><a class="dropdown-item" href="{{route('Article.byCategory', $category)}}">{{$category->name}}</a></li>
              @endforeach
            
            </ul>
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
            <a class="nav-link" href="{{route('Article.create')}}">inserisci articolo</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('careerpage')}}">Lavora con noi</a>
          </li>

          <form method="POST" id="form-logout" action="{{route('logout')}}">

            @csrf
            
            
            
           
          </form>
    
              
          @endauth

        </ul>
      </div>
    </div>
  </nav>