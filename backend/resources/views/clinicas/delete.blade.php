<!-- resources/views/clinicas/delete.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Eliminar Clínica</h1>

    <div class="card">
        <div class="card-body">
            <p>¿Estás seguro de que deseas eliminar esta clínica?</p>
            <p><strong>Nombre:</strong> {{ $clinica->nombre }}</p>
            <p><strong>Correo Electrónico:</strong> {{ $clinica->correo_electronico }}</p>
            <p><strong>Teléfono:</strong> {{ $clinica->telefono }}</p>

            <form action="{{ route('clinicas.destroy', $clinica) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Confirmar Eliminación</button>
            </form>
            <a href="{{ route('clinicas.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </div>
</div>
@endsection
