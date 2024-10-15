<?php
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::get('/home', function () {
    return view('home');
});

//--Route::get('/usuarios', [UsuarioController::class, 'create'])->name('usuarios.index');
//Route::get('/usuarios/create', [UsuarioController::class, 'create'])->name('usuarios.create');
//Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');
//Route::get('/usuarios/{id}', [UsuarioController::class, 'show'])->name('usuarios.show');
//Route::get('/usuarios/{id}/edit', [UsuarioController::class, 'edit'])->name('usuarios.edit');
//Route::put('/usuarios/{id}', [UsuarioController::class, 'update'])->name('usuarios.update');
//Route::delete('/usuarios/{id}', [UsuarioController::class, 'destroy'])->name('usuarios.destroy');

Route::get('/usuarios/show', [UsuarioController::class, 'index']);

// Ruta para mostrar la vista create.blade.php
Route::get('/usuarios/create', [UsuarioController::class, 'create']);

// Ruta para mostrar la vista update.blade.php
Route::get('/usuarios/edit/{usurio}', [UsuarioController::class, 'edit']);

// Ruta para insertar clientes
Route::post('/usuarios/store', [UsuarioController::class, 'store']);

// Ruta para modificar clientes
Route::put('/usuarios/update/{usuario}', [UsuarioController::class, 'update']);

// Ruta para eliminar clientes
Route::delete('/usuarios/destroy/{id}', [UsuarioController::class, 'destroy']);


//CATEGORAS
Route::get('/categorias/show', [CategoriaController::class, 'index']);

// Ruta para mostrar la vista create.blade.php
Route::get('/categorias/create', [CategoriaController::class, 'create']);

// Ruta para mostrar la vista update.blade.php
Route::get('/categorias/edit/{categoria}', [CategoriaController::class, 'edit']);

// Ruta para insertar una nueva categoría
Route::post('/categorias/store', [CategoriaController::class, 'store']);

// Ruta para modificar una categoría
Route::put('/categorias/update/{categoria}', [CategoriaController::class, 'update']);

// Ruta para eliminar una categoría
Route::delete('/categorias/destroy/{id}', [CategoriaController::class, 'destroy']);


