<nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars text-white"></i>
        </button>

        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link active text-white p-0" aria-current="page" href="{{ route('homepage') }}">
                        <img class="logo-custom" src="/images/fiaccola.png" alt="">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white mt-1" href="{{ route('Article.index') }}">Tutti gli Articoli</a>
                </li>

                <li class="nav-item dropdown">
                    <a class=" text-white nav-link dropdown mt-1" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Categorie
                    </a>
                    <ul class="dropdown-menu">
                        
                        @foreach ($categories as $category)
                            <li><a class="dropdown-item mt-1"
                                    href="{{ route('Article.byCategory', $category) }}">{{ $category->name }}</a></li>
                        @endforeach

                    </ul>
                </li>

                @auth

                    <li class="nav-item dropdown">

                        <a class=" text-white nav-link dropdown mt-1" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Area riservata
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a class="nav-link text-dark mt-1" href="{{ route('writer.dashboard') }}">modifica articolo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark mt-1" href="{{ route('admin.dashboard') }}">Richieste</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark mt-1" href="{{ route('revisor.dashboard') }}">Revisione
                                    articoli</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-dark mt-1" href="{{ route('Article.create') }}">Inserisci
                                    articolo</a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link text-light mt-1" href="{{ route('careerpage') }}">Lavora con noi</a>
                    </li>





                    <form method="POST" id="form-logout" action="{{ route('logout') }}">

                        @csrf




                    </form>



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
                        <button class="btn btn-outline-light" type="submit">cerca</button>
                    </form>
                </li>















            </ul>
        </div>
    </div>
</nav>
