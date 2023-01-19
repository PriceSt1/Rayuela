<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AsignaturaProfesorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'profesor' => $this->faker->randomElement(DB::table('profesor')->pluck('id')),
            'idAsignatura' => $this->faker->randomElement(DB::table('asignatura')->pluck('id')),
        ];
    }
}
