<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinica extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'correo_electronico', 'telefono'];

    public function empleados() {
        return $this->hasMany(Empleado::class);
    }
}
