<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Rayuela') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">

        button.btnFoto {
            border-radius: 50%;
            border: none;
            background-color: transparent;
        }

        div.datosAlumno {
            margin-left: 10px;
            margin-right: 280px;
        }

        a.nav-link.active {
            color: black;
        }

    </style>
</head>
<body style="background-color:#E1FCE3;">
<div id="app">
    <nav class="navbar navbar-expand-md shadow-sm" style="background-color:#CBFEB9;">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}" id="appName">
                {{ config('app.name', 'Rayuela') }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="fotoPerfil">
                <button class="btnFoto" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop"
                        aria-controls="staticBackdrop">
                    <img src="https://cdn-icons-png.flaticon.com/512/4121/4121064.png" width="70px" height="70px">
                </button>
            </div>
            <div class="datosAlumno" id="datosAlumnos">
                <span>Nombre del alumno</span><br>
                <span>Curso</span>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav justify-content-center" id="datosAlumnosCenter">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Horario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Calificaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Faltas</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    <div id = "authLinks">
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Salir') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                    </div>
                    <a href="{{ url('/') }}" class="btn btn-danger" id="btnSalir">Salir</a>
                </ul>
            </div>
        </div>
    </nav>
    <div class="offcanvas offcanvas-start " data-bs-backdrop="static" tabindex="-1" id="staticBackdrop"
         aria-labelledby="staticBackdropLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="staticBackdropLabel">Datos</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>
                Contenido
            </div>
        </div>
    </div>

    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>
