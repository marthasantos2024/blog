<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\support\Facades\DB;
use Illuminate\support\Facades\Hash;
use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'name'=>'nuevo_usuario',
            'email'=>'usuario@example.com',
            'password'=>Hash::make('contraseña'),
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    },
    down:: async (queryInterface, Sequelize) =>{
        return queryInterface.bulkDelete('users',{ username::'nuevo_usuario'},{});
    }
};
