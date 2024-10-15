@extends('layout.app')

@section('title', 'Usuarios')

@section('content')
    <h1>Crear Usuario</h1>
    <div class="container">
    <form action="/suarios/store/" method="POST">
        @csrf
        <div class="row">
            <div  clss="col-6">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" name="nombre" id="nombre">
        {{-- @error('nombre')
        <span class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror--}}
        <br>
    </div>
    <div class="col-6">
        <label for="correo">Correo:</label>
        <input type="email" class="form-control" name="correo" id="correo">
         {{-- @error('correo')
        <span class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror--}}
        <br>
    </div>
    <div class="col-6">
        <label for="contraseña">Contraseña:</label>
        <input type="password" class="form-control" name="contraseña" id="contraseña">
        {{-- @error('contraseña')
        <span class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror--}}
        <br>
    </div>
    </div>
    <div class="col-12 mt-3">
        <label for="rol">Rol</label>
        <select name="rol" id="rol" class="form-control">
            @foreach ($categorias as $item)
               <option value="{{ $item->id }}">{{ $item->nombre }}</option>
            @endforeach
        </select>
        @error('rol')
        <span class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
        <br>
        <div class="col-12 mt-2">
        <button type="submit" class="btn btn-primary">Crear Usuario</button>
    </div>
    </form>
</div>
@endsection
