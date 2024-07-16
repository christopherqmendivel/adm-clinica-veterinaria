<!-- resources/views/empleados/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Empleado</h1>

    <form action="{{ route('empleados.update', $empleado) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $empleado->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" id="apellido" class="form-control" value="{{ $empleado->apellido }}" required>
        </div>
        <div class="form-group">
            <label for="dni">DNI:</label>
            <input type="text" name="dni" id="dni" class="form-control" value="{{ $empleado->dni }}" required>
        </div>
        <div class="form-group">
            <label for="clinica_id">Clínica:</label>
            <select name="clinica_id" id="clinica_id" class="form-control" required>
                @foreach($clinicas as $clinica)
                    <option value="{{ $clinica->id }}" {{ $empleado->clinica_id == $clinica->id ? 'selected' : '' }}>{{ $clinica->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="correo_electronico">Correo Electrónico:</label>
            <input type="email" name="correo_electronico" id="correo_electronico" class="form-control" value="{{ $empleado->correo_electronico }}" required>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" id="telefono" class="form-control" value="{{ $empleado->telefono }}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
</div>
@endsection
