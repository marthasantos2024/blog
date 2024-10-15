@extends('layout.app')

@section('title', 'Usuarios')

@section('content')
    <h1>Editar Usuario</h1>
    <div class="container">
    <form action="/usuarios/update/{{ $usuario->id}}" method="POST">
        @csrf
        @method('PUT')
    <div class="row">
        <div class="col-6">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $usuario->nombre }}">
        @error('nombre')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <br>
        <div class="col-6">
        <label for="correo">Correo:</label>
        <input type="email" class="form-control" name="correo" id="correo" value="{{ $usuario->correo }}">
        @error('correo')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <br>
        <div class="col-6">
        <label for="contraseña">Nueva Contraseña (opcional):</label>
        <input type="password" class="form-control" name="contraseña" id="contraseña" value="{{ $usuario->contraseña}}">
        @error('contrseña')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
        @enderror
        </div>
        <br>
    </div>
    <div class="col-12 mt-3">
        <label for="rol">Rol:</label>
        <select name="rol" id="rol" class="form-control">
            @foreach ($roles as $item)
            <option value="{{ $item->id }}" {{ ($item->id == $usuario->categoria) ? 'selected' : '' }}>
                {{ $item->nombre }}
            </option>
             @endforeach
        </select>
        @error('rol')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-12 mt-2">
           <button  class="btn btn-primary">Actualizar Usuario</button>
        </div>
    </form>
</div>
@endsection
