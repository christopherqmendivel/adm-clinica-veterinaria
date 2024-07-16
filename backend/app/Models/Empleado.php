<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'apellido', 'dni', 'clinica_id', 'correo_electronico', 'telefono'];

    public function clinica() {
        return $this->belongsTo(Clinica::class);
    }
}
