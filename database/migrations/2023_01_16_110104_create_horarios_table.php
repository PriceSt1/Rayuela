<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idAsignatura');
            $table->foreign('idAsignatura')->references('id')->on('asignaturas')->onUpdate("cascade")->onDelete("cascade");
            $table->unsignedBigInteger('idAlumno');
            $table->foreign('idAlumno')->references('id')->on('alumnos')->onUpdate("cascade")->onDelete("cascade");
            $table->string('dia');
            $table->integer('hora');
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
        Schema::dropIfExists('horarios');
    }
}
