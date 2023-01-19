<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $curso = array("1eso", "2eso", "3eso", "4eso", "1batch", "2batch");

        return [
            'nombre' => $this->faker->randomElement($curso),
        ];
    }
}
