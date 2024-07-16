<!-- resources/views/clinicas/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de Clínica</h1>

    <div class="card">
        <div class="card-body">
            <p><strong>ID:</strong> {{ $clinica->id }}</p>
            <p><strong>Nombre:</strong> {{ $clinica->nombre }}</p>
            <p><strong>Correo Electrónico:</strong> {{ $clinica->correo_electronico }}</p>
            <p><strong>Teléfono:</strong> {{ $clinica->telefono }}</p>
        </div>
    </div>

    <a href="{{ route('clinicas.index') }}" class="btn btn-secondary mt-3">Volver</a>
</div>
@endsection
