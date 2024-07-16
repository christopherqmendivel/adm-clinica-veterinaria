<!-- resources/views/clinicas/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Clínicas</h1>
    <a href="{{ route('clinicas.create') }}" class="btn btn-primary mb-3">Crear Clínica</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo Electrónico</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clinicas as $clinica)
                <tr>
                    <td>{{ $clinica->id }}</td>
                    <td>{{ $clinica->nombre }}</td>
                    <td>{{ $clinica->correo_electronico }}</td>
                    <td>{{ $clinica->telefono }}</td>
                    <td>
                        <a href="{{ route('clinicas.show', $clinica) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('clinicas.edit', $clinica) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('clinicas.destroy', $clinica) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
