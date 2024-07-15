<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable(false);
            $table->string('apellido')-> nullable(false);
            $table->string('dni')->unique();
            $table->foreignId('clinica_id')->constrained()->onDelete('cascade'); // <- Aquí faltaba un punto y coma
            $table->string('correo_electronico')->unique();
            $table->string('telefono');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
