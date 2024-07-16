<!-- resources/views/empleados/delete.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Eliminar Empleado</h1>

    <div class="card">
        <div class="card-body">
            <p>¿Estás seguro de que deseas eliminar este empleado?</p>
            <p><strong>Nombre:</strong> {{ $empleado->nombre }}</p>
            <p><strong>Apellido:</strong> {{ $empleado->apellido }}</p>
            <p><strong>DNI:</strong> {{ $empleado->dni }}</p>
            <p><strong>Clínica:</strong> {{ $empleado->clinica->nombre }}</p>
            <p><strong>Correo Electrónico:</strong> {{ $empleado->correo_electronico }}</p>
            <p><strong>Teléfono:</strong> {{ $empleado->telefono }}</p>

            <form action="{{ route('empleados.destroy', $empleado) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Confirmar Eliminación</button>
            </form>
            <a href="{{ route('empleados.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </div>
</div>
@endsection
