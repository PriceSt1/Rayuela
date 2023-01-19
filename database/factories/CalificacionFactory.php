<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CalificacionFactory extends Factory
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
            'nota' => random_int(0,10),
        ];
    }
}
