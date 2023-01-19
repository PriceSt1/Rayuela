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
            $table->id();
            $table->dateTime('fecha');
            $table->integer('idHora');
            $table->foreign('idHora')->references('id')->on('horas_clases')->onUpdate("cascade")->onDelete("cascade");
            $table->integer('idAlumno');
            $table->foreign('idAlumno')->references('id')->on('alumnos')->onUpdate("cascade")->onDelete("cascade");
            $table->integer('idProfesor');
            $table->foreign('idProfesor')->references('id')->on('profesors')->onUpdate("cascade")->onDelete("cascade");
            $table->integer('idAsignatura');
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
