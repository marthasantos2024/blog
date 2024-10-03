<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\support\Facades\DB;
use Illuminate\support\Facades\Hash;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void

    {
        // crear usuario administrador
        $data = array([
            'nombre' => 'Admin User',
            'correo' => 'admin@example.com',
            'contraseña' => Hash::make('password123'), // Contraseña encriptada
            'rol' => 'admin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],

        //crear usuario autor
        [
            'nombre' => 'Autor Usuario',
            'correo' => 'autor@example.com',
            'contraseña' => Hash::make('password456'), 
            'rol' => 'autor',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        
       [
            'nombre' => 'Lector Usuario',
            'correo' => 'lector@example.com',
            'contraseña' => Hash::make('password789'), 
            'rol' => 'lector',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]
    );
    DB::table('Usuarios')->insert($data);
    }
};
