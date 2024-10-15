@extends('layouts.app')

{{-- Definimos el titulo --}}
@section('title', 'Clientes')

{{-- Definimos el contenido --}}
@section('content')
    <h1>Clientes</h1>
    <h5>Listado de clientes</h5>
    <hr>
    {{-- Botón para ir al formulario de agregar producto --}}
    <a class="btn btn-danger btn-sm" href="/clientes/create">Agregar nuevo cliente</a>
    <a class="btn btn-info btn-sm" href="/reportsCliente">Generar reporte</a>
    <table class="table table-hover table-bordered mt-2">
        <thead>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>correo</th>
                <th>contraseña</th>
                <th>rol</th>
            </tr>
        </thead>
        <tbody>
            {{-- Listado de productos --}}
            @foreach ($usuaris as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nombre }}</td>
                    <td>{{ $item->correo }}</td>
                    <td>{{ $item->contraseña }}</td>
                    <td>{{ $item->rol }}</td>
                    <td>
                        <a class="btn btn-success btn-sm" href="/usuarios/edit/{{ $item->codigo }}">Modificar</a>
                        
                        <button class="btn btn-danger btn-sm" 
                                onclick="destroy(this)" 
                                url="/usuarios/destroy/{{ $item->id }}" 
                                token="{{ csrf_token() }}">
                            Eliminar
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('scripts')
    {{-- SweetAlert --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- JS --}}
    <script src="{{ asset('js/usuarios.js') }}"></script>
@endsection
