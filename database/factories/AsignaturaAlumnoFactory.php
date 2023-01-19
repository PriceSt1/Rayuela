<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AsignaturaAlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idAlumno' => $this->faker->randomElement(DB::table('alummo')->pluck('id')),
            'idAsignatura' => $this->faker->randomElement(DB::table('asignatura')->pluck('id')),
        ];
    }
}
