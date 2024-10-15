<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Categoria;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        // Listar todos los clientes
        $usuarios = Usuario::select(
            "usuarios.codigo",
            "usuarios.nombre",
            "usuarios.edad",
            "roles.nombre as rol"
        )
        ->join("roles", "roles.id", "=", "usuarios.rol")
        ->get();

        // Mostrar vista show.blade.php junto al listado de clientes
        return view('usuarios.show')->with(['usuarios' => $usuarios]);
    
    }

    /**
     * Show the form for creating a new resource.
     * * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Listar categorías para llenar select
        $roles = rol::all();
        
        // Mostrar vista create.blade.php junto al listado de categorías
        return view('usuarios.create')->with(['roles' => $roles]);
    
    }

    /**
     * Store a newly created resource in storage.
     * * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validar campos
        $data = request()->validate([
            'nombre' => 'required',
            'correo' => 'required',
            'contraseña' => 'required',
            'rol' => 'required'
        ]);

        // Enviar insert
        Usuario::create($data);

        // Redireccionar
        return redirect('/usuarios/show');
    }

    /**
     * Display the specified resource. 
     *  
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param Usuario $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        // Listar categorías para llenar select
        $roles = rol::all();

        // Mostrar vista update.blade.php junto al cliente y las categorías
        return view('usuario.update')->with(['usuario' => $usuario, 'roles' => $roles]);
   
    }

    /**
     * Update the specified resource in storage.
     *  
     * @param \Illuminate\Http\Request $request
     * @param Usuario $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        // Validar campos
        $data = request()->validate([
            'nombre' => 'required',
            'correo' => 'required',
            'contraseña' => 'required',
            'rol' => 'required'
        ]);

        // Reemplazar datos anteriores por los nuevos
        $usuario->nombre = $data['nombre'];
        $usuario->correo = $data['correo'];
        $usuario->contraseña = $data['contraseña'];
        $usuario->rol = $data['rol'];
        $usuario->updated_at = now();

        // Enviar a guardar la actualización
        $usuario->save();

        // Redireccionar
        return redirect('/usuarios/show');
    
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Eliminar el cliente con el id recibido
        Usuario::destroy($id);

        // Retornar una respuesta json
        return response()->json(['resss' => true]);
    }
}
