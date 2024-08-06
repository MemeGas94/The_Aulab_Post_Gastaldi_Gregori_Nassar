<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="p-0 mt-1">
                <a class="navbar-brand" href="">
                    <img class="logo-custom" src="/images/fiaccola.png" alt="">
                </a>
            </ul>


            <ul class="navbar-nav ">
                

                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('Article.index') }}">Tutti gli Articoli</a>
                </li>

                <li class="nav-item dropdown">
                    <a class=" text-white nav-link dropdown" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Categorie
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                            <li><a class="dropdown-item"
                                    href="{{ route('Article.byCategory', $category) }}">{{ $category->name }}</a></li>
                        @endforeach

                    </ul>
                </li>


                @auth
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('Article.create') }}">Inserisci articolo</a>
                    </li>








                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('admin.dashboard') }}">Richieste</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('revisor.dashboard') }}">Revisione articoli</a>
                    </li>



                    <form method="POST" id="form-logout" action="{{ route('logout') }}">

                        @csrf




                    </form>


                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('careerpage') }}">Lavora con noi</a>
                    </li>

                @endauth

            </ul>
            <ul class="navbar-nav ms-auto">

                @guest

                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('register') }}">Register</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
                    </li>


                @endguest

                @auth
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#"
                            onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
                    </li>
                @endauth

                <li class="nav-item">
                  <form class="d-flex" method="GET" action="{{ route('Article.search') }}" role="search">
                      <input class="form-control me-2" type="search" name="query"
                          placeholder="cerca tra gli articoli..">
                      <button class="btn btn-outline-success" type="submit">cerca</button>
                  </form>
               </li>















            </ul>
        </div>
    </div>
</nav>
