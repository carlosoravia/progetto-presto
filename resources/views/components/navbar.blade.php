<nav class="navbar sticky-top border rounded navbar-expand-lg navbar-dark p-4 bg-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-lg-0 m-2">
                <li class="nav-item mx-2">
                    <a class="nav-link my-link active text-white" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link my-link text-white" href="{{route('article.index')}}">{{__('ui.navbarArticoli')}}</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link my-link text-white" href="{{route('contact')}}">{{__('ui.navbarContatti')}}</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-lg-0 my-auto">
                {{-- inizio sezione login --}}
                @guest
                <li class="m-2">
                    <a href="{{route('login')}}" class="btn btn-outline-warning">Login</a>
                </li>
                <li class="m-2">
                    <a href="{{route('register')}}" class="btn btn-outline-warning">{{__('ui.register')}}</a>
                </li>
                @endguest
                {{-- fine sezione login --}}
                @auth
                {{-- inizio dashboard auth --}}
                @if(Auth::user() && Auth::user()->is_revisor)
                <li class="dropdown">
                    <a class="btn btn-outline-warning m-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dashboard
                        <span class="ms-2">
                            @if (App\Models\Article::toBeRevisionedCount() == 0)
                            <i class="bi bi-calendar2-check-fill"></i>
                            @else
                            <i class="bi bi-envelope-exclamation"></i>
                            @endif
                        </span>
                    </a>

                    <div class="dropdown-menu">
                        <ul class="">
                            <div class="list-group list-group-numbered">
                                <li class="dropdown-item">
                                    <a class="btn btn-outline-warning btn-wow-yellow" href="{{route('revisor.index')}}">
                                        <div class="">{{__('ui.articoli')}}<span class="badge bg-danger rounded-pill mx-2">
                                            {{App\Models\Article::toBeRevisionedCount()}}
                                        </span></div>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="{{route('revisor.table')}}" class="btn btn-outline-warning btn-wow-yellow">{{__('ui.tabella')}}</a>
                                </li>
                            </div>
                        </ul>
                    </div>
                </li>
                @endif
                {{-- fine dashboard auth --}}

                {{-- ------------------------ --}}

                {{-- inizio sezione personale --}}
                <li class="dropdown">
                    <a class="btn btn-outline-warning m-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{Auth::user()->name}}<span class="ms-2"><i class="bi bi-person-circle"></i></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <ul class="d-inline">
                            <div class="list-group list-group-numbered">
                                @auth
                                {{-- bottone crea articolo --}}
                                <li class="dropdown-item">
                                    <a class="btn btn-outline-warning btn-wow-yellow" href="{{route('article.create')}}">{{__('ui.creaArt')}}</a>
                                </li>
                                {{-- bottone log-out --}}
                                <li class="dropdown-item">
                                    <form action="{{route('logout')}}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger btn-wow-red">Logout</button>
                                    </form>
                                </li>
                                @endauth
                            </div>
                        </ul>
                    </div>
                </li>
                {{-- fine sezione personale --}}
                @endauth
                <li class="m-2 my-auto">
                    {{-- inizio bottone lingue --}}
                    <x-btn-language-selector/>
                    {{-- fine bottone lingue --}}
                </li>
                <li class="m-2">
                    <button class="btn btn-outline-light my-auto" id="darkMode">

                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>





{{-- seconda potenziale navbar --}}


{{-- <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
            <li><a href="#" class="nav-link px-2 link-warning">Features</a></li>
            <li><a href="#" class="nav-link px-2 link-warning">Pricing</a></li>
            <li><a href="#" class="nav-link px-2 link-warning">FAQs</a></li>
            <li><a href="#" class="nav-link px-2 link-warning">About</a></li>
        </ul>

        <div class="col-md-3 text-end">
            @guest
                <a href="{{route('login')}}" class="btn btn-outline-warning">Login</a>
<a href="{{route('register')}}" class="btn btn-outline-warning">Registrati</a>
@endguest
@auth
<a href="" class="btn btn-outline-warning mx-2">{{Auth::user()->name}}</a>
<form action="{{route('logout')}}" method="POST">
    @csrf
    <button type="submit" class="btn btn-outline-warning">Logout</button>
</form>
@endauth
</div>
</header>
</div> --}}
