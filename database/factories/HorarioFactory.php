<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HorarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idAsignatura' => $this->faker->randomElement(DB::table('asignatura')->pluck('id')),
            'idAlumno' => $this->faker->randomElement(DB::table('alumno')->pluck('id')),
            'dia' => $this->faker->dayOfWeek,
            'hora' => random_int(1,6),
        ];
    }
}
