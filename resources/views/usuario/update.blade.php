@extends('layouts.app')
<style>
    /* Estilos para el formulario de edición */
.container {
    max-width: 600px; /* Limitar el ancho del contenedor */
    margin: auto; /* Centrar el contenedor */
}

h1 {
    margin-bottom: 20px; /* Espacio debajo del título */
}

.btn {
    margin-top: 10px; /* Espacio superior para los botones */
}

</style>
{{-- Definimos el título --}}
@section('title', 'Editar Usuario')

{{-- Definimos el contenido --}}
@section('content')
<div class="container mt-5">
    <h1>Editar Usuario</h1>
    <hr>

    {{-- Formulario de edición --}}
    <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
        @csrf
        @method('PUT') {{-- Método para indicar que es una actualización --}}

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $usuario->nombre }}" required>
        </div>

        <div class="form-group">
            <label for="correo">Correo</label>
            <input type="email" class="form-control" id="correo" name="correo" value="{{ $usuario->correo }}" required>
        </div>

        <div class="form-group">
            <label for="rol">Rol</label>
            <select class="form-control" id="rol" name="rol" required>
                <option value="autor" {{ $usuario->rol == 'autor' ? 'selected' : '' }}>Autor</option>
                <option value="editor" {{ $usuario->rol == 'editor' ? 'selected' : '' }}>Editor</option>
                <option value="admin" {{ $usuario->rol == 'admin' ? 'selected' : '' }}>Admin</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Usuario</button>
        <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
