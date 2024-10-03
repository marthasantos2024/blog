@extends('layouts.app')
<style>
    /* custom.css */

/* Estilos para la tabla */
.table {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

.table th, .table td {
    vertical-align: middle; /* Centrar el contenido de las celdas */
}

.table th {
    background-color: #007bff; /* Cambiar el color del encabezado */
    color: white; /* Color del texto del encabezado */
}

.table tr:hover {
    background-color: #f1f1f1; /* Resaltar la fila al pasar el mouse */
}

/* Botones */
.btn {
    margin-right: 5px; /* Espacio entre botones */
}

</style>

{{-- Definimos el título --}}
@section('title', 'Usuario')

{{-- Definimos el contenido --}}
@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Listado de Usuarios</h1>
        <a class="btn btn-danger btn-sm mb-3" href="{{ route('usuarios.create') }}">Agregar nuevo usuario</a>

        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                {{-- Listado de usuarios --}}
                @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->id }}</td>
                        <td>{{ $usuario->nombre }}</td>
                        <td>{{ $usuario->correo }}</td>
                        <td>{{ $usuario->rol }}</td>
                        <td>
                            <a class="btn btn-info btn-sm" href="{{ route('usuarios.show', $usuario->id) }}">Ver</a>
                            <a class="btn btn-success btn-sm" href="{{ route('usuarios.edit', $usuario->id) }}">Modificar</a>
                            <button class="btn btn-danger btn-sm" 
                                    onclick="destroy(this)" 
                                    url="{{ route('usuarios.destroy', $usuario->id) }}" 
                                    token="{{ csrf_token() }}">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('scripts')
    {{-- SweetAlert --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- JS --}}
    <script src="{{ asset('js/user.js') }}"></script>
@endsection
