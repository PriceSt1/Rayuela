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

                        {{ __('Soy el Alumno') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("appName").style.display = "none";
        document.getElementById("fotoPerfil").style.display = "block";
        document.getElementById("datosAlumno").style.display = "block";
        document.getElementById("datosAlumnosCenter").style.display = "block";
        document.getElementById("loginButtons").style.display = "none";
        document.getElementById("staticBackdrop").style.display = "block";
        document.getElementById("btnSalir").style.display = "block";
    </script>
@endsection
