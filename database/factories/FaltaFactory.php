<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FaltaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fecha' => date ( 'd-m-Y' ),
            'idHora' => $this->faker->randomElement(DB::table('horasClase')->pluck('id')),
            'idAlumno' => $this->faker->randomElement(DB::table('alumno')->pluck('id')),
            'idProfesor' => $this->faker->randomElement(DB::table('profesor')->pluck('id')),
            'idAsignatura' => $this->faker->randomElement(DB::table('asignatura')->pluck('id')),
        ];
    }
}
