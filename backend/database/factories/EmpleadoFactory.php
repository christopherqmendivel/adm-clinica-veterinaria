<?php

namespace Database\Factories;

use App\Models\Empleado;
use App\Models\Clinica;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadoFactory extends Factory
{
    protected $model = Empleado::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->firstName,
            'apellido' => $this->faker->lastName,
            'dni' => $this->faker->regexify('[0-9]{8}[A-Z]'), 
            'clinica_id' => Clinica::factory(), 
            'correo_electronico' => $this->faker->unique()->safeEmail,
            'telefono' => $this->faker->phoneNumber,
        ];
    }
}
