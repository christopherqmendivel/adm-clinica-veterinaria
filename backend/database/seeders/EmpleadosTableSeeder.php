<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Empleado;
use App\Models\Clinica;

class EmpleadosTableSeeder extends Seeder
{
    public function run()
    {
        Empleado::truncate();

        $clinicas = Clinica::factory()->count(5)->create();

        foreach ($clinicas as $clinica) {
            Empleado::factory()->count(10)->create([
                'clinica_id' => $clinica->id,
            ]);
        }
    }
}
