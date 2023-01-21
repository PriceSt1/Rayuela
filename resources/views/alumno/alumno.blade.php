@extends('layouts.app')
@section('content')
    @php
        $alumno = true;
    @endphp
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <!--La sesion no se por que no funciona, he probado diferentes cosas pero
        a la hora de mantenerla en esta pagina no funciona.
        a futuro las paginas debemos meterlas entre section y endsection debido a que si no el token csrf no funciona,
        o al menos no he consegido que funcione lo que he hecho es coger el codigo de Elena y como era codigo que
        estaba unicamente en el navbar lo he trasladado a app.blade.php y manipulando con javascript
        las etiquetas las he desactivado o activado dependiendo de donde estuvieran, es una solucion tosca y burda
        pero funciona de momento para mas adelante encontrar otra mejor con roles-->
        <script>
            document.getElementById("fotoPerfil").style.display = "block";
            document.getElementById("datosAlumnos").style.display = "block";
            document.getElementById("datosAlumnosCenter").style.display = "block";
            document.getElementById("staticBackdrop").style.display = "block";
            document.getElementById("appName").style.display = "none";
            document.getElementById("authLinks").style.display = "none";
        </script>
@endsection

