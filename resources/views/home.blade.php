@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <!--Aqui en un futuro te rediccionara a la pagina de alumnos o a la pagina de profsores segun sea tu rol-->
                        <div>
                            @if(auth()->user()->idRol == 1)
                                <a href="{{ route("alumnos.index") }}" class="btn btn-danger">Boton de prueba ir a la pagina alumno</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("fotoPerfil").style.display = "none";
        document.getElementById("datosAlumnos").style.display = "none";
        document.getElementById("datosAlumnosCenter").style.display = "none";
        document.getElementById("navbarSupportedContent").style.display = "none";
        document.getElementById("staticBackdrop").style.display = "none";
        document.getElementById("btnSalir").style.display = "none";
    </script>
@endsection

