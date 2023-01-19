<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SeguimientoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $comentarios = array("muy bien", "regular", "mal");

        return [
            'idProfesor' => $this->faker->randomElement(DB::table('profesor')->pluck('id')),
            'idAlumno' => $this->faker->randomElement(DB::table('alumno')->pluck('id')),
            'dia' => date ( 'd-m-Y' ),
            'hora' => random_int(1,6),
            'idAsignatura' => $this->faker->randomElement(DB::table('asignatura')->pluck('id')),
            'comentario' => $this->faker->randomElement($comentarios),
        ];
    }
}
