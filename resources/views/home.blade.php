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
                        <!--Esto en un futuro comprobara el rol que tenga el usuario logeado y lo llevara a una pagina u otra -->
                        <a href="{{ route('alumno.index') }}" class="btn btn-info">Boton de prueba que lleva a
                            alumno</a>
                    </div>
                </div>
            </div>
        </div>
        <script>
            document.getElementById("appName").style.display = "block";
            document.getElementById("fotoPerfil").style.display = "none";
            document.getElementById("datosAlumnosCenter").style.display = "none";
            document.getElementById("loginButtons").style.display = "block";
            document.getElementById("staticBackdrop").style.display = "none";
            document.getElementById("btnSalir").style.display = "none";
            document.getElementById("datosAlumno").style.display = "none";
        </script>
    </div>
@endsection
