<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AsignaturaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $asignaturas = array("lengua", "matematicas", "ingles", "ciencias naturales", "ciencias sociales",
        "educacion fisica", "musica", "religion", "valores", "tecnologia", "plastica", "filosofia", "economia");

        return [
            'nombre' => $this->faker->randomElement($asignaturas),
            'profesor' => $this->faker->randomElement(DB::table('profesor')->pluck('id')),
            'idCurso' => $this->faker->randomElement(DB::table('curso')->pluck('id')),
        ];
    }
}
