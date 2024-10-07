@extends('layout.app')

@section('content')
    <h1>Crear nuevo usuario</h1>

    <form action="{{ route('usuarios.store') }}" method="POST">
        @csrf
        
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}">
            @error('nombre')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="correo">Correo</label>
            <input type="email" name="correo" id="correo" value="{{ old('correo') }}">
            @error('correo')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password">
            @error('password')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="rol">Rol</label>
            <select name="rol" id="rol">
                <option value="autor" {{ old('rol') == 'autor' ? 'selected' : '' }}>Autor</option>
                <option value="admin" {{ old('rol') == 'admin' ? 'selected' : '' }}>Admin</option>
            </select>
            @error('rol')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <button type="submit">Crear Usuario</button>
    </form>
@endsection
