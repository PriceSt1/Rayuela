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
        button.btnFoto{
            border-radius: 50%;
            border:none;
            background-color:transparent;
        }
        div.datosAlumno{
            margin-left: 10px;
            margin-right: 280px;
        }
        a.nav-link.active{
            color:black;
        }

    </style>
</head>
<body style="background-color:#E1FCE3;">
    <div id="app">
        <nav class="navbar navbar-expand-md shadow-sm" style="background-color:#CBFEB9;">
            <div class="container">
                <button class="btnFoto" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
                    <img src="https://cdn-icons-png.flaticon.com/512/4121/4121064.png" width="70px" height="70px">
                </button>
                <div class="datosAlumno">
                    <span>Nombre del alumno</span><br>
                    <span>Curso</span>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav justify-content-center">
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
                <a href="{{ url('/') }}" class="btn btn-danger">Salir</a>

            </div>
        </nav>
        <div class="offcanvas offcanvas-start " data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
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
    </div>
</body>
</html>
