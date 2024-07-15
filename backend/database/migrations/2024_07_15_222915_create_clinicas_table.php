<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClinicasTable extends Migration
{
    public function up()
    {
        Schema::create('clinicas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable(false);
            $table->string('correo_electronico')->unique();
            $table->string('telefono');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clinicas');
    }
}
