<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificacions', function (Blueprint $table) {
            $table->id();
            $table->integer('idAlumno');
            $table->foreign("idAlumno")->references('id')->on('alumnos')->onUpdate("cascade")->onDelete("cascade");
            $table->integer('idAsignatura');
            $table->foreign("idAsignatura")->references('id')->on('asignaturas')->onUpdate("cascade")->onDelete("cascade");
            $table->integer('nota');
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
        Schema::dropIfExists('calificacions');
    }
}
