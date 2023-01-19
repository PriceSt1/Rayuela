<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $roles = array("profesor", "alumno");
        $num = random_int(0, 1);

        return [
            'idRol' => $num,
            'tipoRol' => $roles[$num],
        ];
    }
}
