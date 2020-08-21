    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Fênix Admin @hasSection('title') - @yield('title') @endif</title>

        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
        rel="stylesheet">
        <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3 d-flex justify-content-center" href="#">
                <img src="{{ asset('assets/images/fenix-hookah.svg') }}" width="70px" class="img-fluid" alt="Logo fenix" />
            </a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
           
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();
                            ">
                        {{ __('Deslogar') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse" >
                <div class="sidebar-sticky pt-3">
                    <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->routeIs('home')) ? 'active' : '' }}" href="{{route('home')}}">
                            <span class="material-icons">home</span>
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->routeIs('category')) ? 'active' : '' }}" href="{{route('category')}}">
                        <span class="material-icons">category</span>
                         Categorias
                        </a>
                    </li>
                    </ul>
                        {{--  <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Saved reports</span>
                        <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle"></span>
                        </a>
                        </h6>  --}}
                </div>
            </nav>
            <main id="app" role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                @hasSection ('content')
                    @yield('content')
                @endif
            </main>
        </div>
        </div>
        <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    </body>
</html>
 