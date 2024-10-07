<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;

Route::get('/home', function () {
    return view('home');
});
Route::get('usuarios/store', [UsuarioController::class, 'create'])->name('usuarios.create');

Route::get('/usuario/create', function(){
    return view('usuario/create');
});
Route::get('/usuario/update', function(){
    return view('usuario/update');
});
Route::get('/usuario/show', [UsuarioController::class, 'index']);

Route::get('/usuario/create', [UsuarioController::class, 'index']);

Route::get('/usuario/edit', [UsuarioController::class, 'index']);
Route::get('/categoria/show', [CategoriaController::class, 'index']);

// Ruta para mostrar la vista create.blade.php
Route::get('/categoria/create', [CategoriaController::class, 'create']);

// Ruta para mostrar la vista update.blade.php
Route::get('/categoria/edit/{categoria}', [CategoriaController::class, 'edit']);

// Ruta para insertar una nueva categoría
Route::post('/categoria/show', [CategoriaController::class, 'show']);
