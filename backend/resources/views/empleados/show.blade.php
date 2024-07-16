<!-- resources/views/empleados/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Empleado</h1>
    <div class="card">
        <div class="card-body">
            <p><strong>Nombre:</strong> {{ $empleado->nombre }}</p>
            <p><strong>Apellido:</strong> {{ $empleado->apellido }}</p>
            <p><strong>DNI:</strong> {{ $empleado->dni }}</p>
            <p><strong>Clínica:</strong> {{ $empleado->clinica->nombre }}</p>
            <p><strong>Correo Electrónico:</strong> {{ $empleado->correo_electronico }}</p>
            <p><strong>Teléfono:</strong> {{ $empleado->telefono }}</p>
            <a href="{{ route('empleados.edit', $empleado) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('empleados.destroy', $empleado) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
</div>
@endsection
