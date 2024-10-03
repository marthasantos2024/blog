@extends('layouts.app')

@section('content')
<style>
    /* custom.css */

/* Estilos para el contenedor principal */
.container {
    background-color: #f9f9f9;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 600px;
    margin: 20px auto;
}

/* Estilos para los títulos */
h2 {
    text-align: center;
    margin-bottom: 20px;
    font-family: 'Arial', sans-serif;
    font-size: 1.8em;
    color: #333;
}

/* Estilos para las etiquetas de los campos */
label {
    font-weight: bold;
    color: #555;
    margin-bottom: 10px;
}

/* Estilos para los campos de entrada */
input[type="text"],
input[type="email"],
input[type="password"],
select {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 1em;
    color: #333;
}

/* Estilos para el botón */
button[type="submit"] {
    width: 100%;
    padding: 12px;
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    color: white;
    font-size: 1.2em;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}

/* Estilos responsivos para pantallas pequeñas */
@media (max-width: 576px) {
    .container {
        padding: 20px;
    }

    h2 {
        font-size: 1.5em;
    }

    button[type="submit"] {
        font-size: 1em;
    }
}

</style>
@csrf
<div class="container">
    <h2>Crear nuevo usuario</h2>

    <form action="{{ route('usuarios.store') }}" method="POST">
        
        
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introduce el nombre" required>
        </div>

       
        <div class="form-group">
            <label for="correo">Correo</label>
            <input type="email" class="form-control" id="correo" name="correo" placeholder="Introduce el correo" required>
        </div>

      
        <div class="form-group">
            <label for="contraseña">Contraseña</label>
            <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="Introduce la contraseña" required>
        </div>

      
        <div class="form-group">
            <label for="rol">Rol</label>
            <select class="form-control" id="rol" name="rol">
                <option value="autor" selected>Autor</option>
                <option value="admin">Administrador</option>
                <option value="editor">Editor</option>
            </select>
        </div>

        <!-- Botón para enviar -->
        <button type="submit" class="btn btn-primary">Crear Usuario</button>
    </form>
</div>
@endsection
