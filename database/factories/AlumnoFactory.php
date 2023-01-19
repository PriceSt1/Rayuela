<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->firstName,
            'apellidos' => $this->faker->lastName,
            'dni' => $this->faker->randomNumber($nbDigits = 8, $strict = false) . $this->faker->randomLetter,
            'curso' => $this->faker->randomElement(DB::table('curso')->pluck('id')),
            'asignaturaAlumno' => $this->faker->randomElement(DB::table('asignaturaAlumno')->pluck('id')),
            'idRol' => random_int(0,1),
        ];
    }
}
