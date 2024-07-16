<!-- resources/views/empleados/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear Empleado</h1>

        <!-- Aquí va el formulario para crear un nuevo empleado -->
        <form action="{{ route('empleados.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" id="apellido" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="dni">DNI:</label>
                <input type="text" name="dni" id="dni" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="clinica_id">Clínica:</label>
                <select name="clinica_id" id="clinica_id" class="form-control" required>
                    @foreach($clinicas as $clinica)
                        <option value="{{ $clinica->id }}">{{ $clinica->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="correo_electronico">Correo Electrónico:</label>
                <input type="email" name="correo_electronico" id="correo_electronico" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" name="telefono" id="telefono" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Crear Empleado</button>
        </form>
    </div>
@endsection
