<?php


namespace Database\Factories;

use App\Models\Clinica;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClinicaFactory extends Factory
{
    protected $model = Clinica::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->company,
            'correo_electronico' => $this->faker->unique()->safeEmail,
            'telefono' => $this->faker->phoneNumber,
        ];
    }
}
