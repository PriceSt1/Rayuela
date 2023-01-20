<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeguimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguimientos', function (Blueprint $table) {
            $table->unsignedBigInteger('idProfesor');
            $table->foreign("idProfesor")->references('id')->on('profesors')->onUpdate("cascade")->onDelete("cascade");
            $table->unsignedBigInteger('idAlumno');
            $table->foreign("idAlumno")->references('id')->on('alumnos')->onUpdate("cascade")->onDelete("cascade");
            $table->dateTime('fechaHora');
            $table->unsignedBigInteger('idAsignatura');
            $table->foreign("idAsignatura")->references('id')->on('asignaturas')->onUpdate("cascade")->onDelete("cascade");
            $table->string('comentario');
            $table->primary(["idProfesor", "idAlumno", "fechaHora", "idAsignatura"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seguimientos');
    }
}
