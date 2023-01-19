<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HorasClaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $horaInicio = array(8, 9, 10, 11, 12, 13);
        $horaFinal = array(9, 10, 11, 12, 13, 14);

        $num = random_int(0, 6);

        return [
            'horaInicio' => $horaInicio[$num],
            'horaFinal' => $horaFinal[$num],
        ];
    }
}
