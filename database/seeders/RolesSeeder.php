<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
<<<<<<< HEAD
        
    }
    
}
=======
       $data = array([
        'nombre' => 'Admin',
        'descripcion' => 'Usuario con control total sobre la aplicacion',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
       ],
       [
        'nombre' => 'Editor',
        'descripcion' => 'Usuario con permisos para crear y editar contenido',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
       ],
       [
        'nombre' => 'Usuario',
        'descripcion' => 'Usuario regular con acceso limitado a las funcionalidades',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
       ]
       );
 
    //tabla intermedia si un usuario tener multiples roles
        DB::tabla('roles')->insert($data);
    }
}
>>>>>>> 04eaa069c89a298eaf238ebc0e1c348b75e7b0ab
