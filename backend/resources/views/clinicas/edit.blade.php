<!-- resources/views/clinicas/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Clínica</h1>

    <form action="{{ route('clinicas.update', $clinica) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $clinica->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="correo_electronico">Correo Electrónico:</label>
            <input type="email" name="correo_electronico" id="correo_electronico" class="form-control" value="{{ $clinica->correo_electronico }}" required>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" id="telefono" class="form-control" value="{{ $clinica->telefono }}">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Clínica</button>
    </form>
</div>
@endsection
