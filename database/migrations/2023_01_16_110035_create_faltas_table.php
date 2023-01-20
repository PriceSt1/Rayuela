<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaltasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faltas', function (Blueprint $table) {
            $table->dateTime('fecha');
            $table->unsignedBigInteger('idHora');
            $table->foreign('idHora')->references('id')->on('horas_clases')->onUpdate("cascade")->onDelete("cascade");
            $table->unsignedBigInteger('idAlumno');
            $table->foreign('idAlumno')->references('id')->on('alumnos')->onUpdate("cascade")->onDelete("cascade");
            $table->unsignedBigInteger('idProfesor');
            $table->foreign('idProfesor')->references('id')->on('profesors')->onUpdate("cascade")->onDelete("cascade");
            $table->unsignedBigInteger('idAsignatura');
            $table->foreign('idAsignatura')->references('id')->on('asignaturas')->onUpdate("cascade")->onDelete("cascade");
            $table->primary(["fecha", "idHora", "idAlumno"]);
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
        Schema::dropIfExists('faltas');
    }
}
