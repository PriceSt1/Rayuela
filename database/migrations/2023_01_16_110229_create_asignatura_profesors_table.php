<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignaturaProfesorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignatura_profesors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idProfesor');
            $table->foreign("idProfesor")->references('id')->on('profesors')->onUpdate("cascade")->onDelete("cascade");
            $table->unsignedBigInteger('idAsignatura');
            $table->foreign("idAsignatura")->references('id')->on('asignaturas')->onUpdate("cascade")->onDelete("cascade");
            $table->primary(["idProfesor", "idAsignatura"]);
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
        Schema::dropIfExists('asignatura_profesors');
    }
}
