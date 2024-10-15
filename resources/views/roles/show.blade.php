@extends('layout.app')

@section('content')
    <div class="container">
        <h1>Detalles del Rol</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $rol->nombre }}</h5>
                <p class="card-text"><strong>Descripción:</strong> {{ $rol->descripcion }}</p>
                <p class="card-text"><strong>Creado:</strong> {{ $rol->created_at->format('d/m/Y H:i') }}</p>
                <p class="card-text"><strong>Última actualización:</strong> {{ $rol->updated_at->format('d/m/Y H:i') }}</p>
                <a href="{{ route('roles.edit', $rol->id) }}" class="btn btn-primary">Editar</a>
                <a href="{{ route('roles.index') }}" class="btn btn-secondary">Volver</a>
            </div>
        </div>
    </div>
@endsection
