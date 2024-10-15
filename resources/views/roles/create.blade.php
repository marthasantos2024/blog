@extends('layout.app')

@section('title', 'roles')

@section('content')
<h1>Crear Rol</h1>
    <div class="container">
        <form action="roles/store" method="POST">
            @csrf
            <div class="row">
                <div class="col-6">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="form-control">
            </div>

            <div class="col-6">
                <label for="descripcion">Descripción</label>
                <textarea name="descripcion" class="form-control"></textarea>
            </div>
            <div class="col-12 mt-2">
            <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </form>
    </div>
@endsection
