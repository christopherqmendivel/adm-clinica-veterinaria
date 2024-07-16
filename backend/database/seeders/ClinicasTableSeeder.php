<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Clinica;


class ClinicasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Genera 30 registros de prueba para clinicas
        Clinica::factory()->count(5)->create();
    }
}
