<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignaturaAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignatura_alumnos', function (Blueprint $table) {
            $table->unsignedBigInteger('idAlumno');
            $table->foreign("idAlumno")->references('id')->on('alumnos')->onUpdate("cascade")->onDelete("cascade");
            $table->unsignedBigInteger('idAsignatura');
            $table->foreign("idAsignatura")->references('id')->on('asignaturas')->onUpdate("cascade")->onDelete("cascade");
            $table->primary(["idAlumno", "idAsignatura"]);
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
        Schema::dropIfExists('asignatura_alumnos');
    }
}
