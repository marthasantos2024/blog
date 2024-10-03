<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;
use Carbon\Carbon;

class ComentariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     *@return void
     */
    public function run(): void
    {
        //comentario de un usuario registrado
        $data = array([
            'publicacion_id'=>1,//asumiendo que existe una publicacion con id 1
            'usuario_id'=>1, //usuario registrocon ID 1
            'nomnre'=>null, //no es necesario porque el usuario esta registrado
            'correo'=>null, //no es necesario por que el usuario esta registrado
            'body'=>'Este es un comentario de un usuario registrado.',
            'aprobado'=> true, //comentario aprobado
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ],

        //comentario anónimo
        [
            'publicacion_id'=>2,//asumiendo que existe una publicacion con id 2
            'usuario_id'=>null, //es un comentario anomino
            'nomnre'=>'Anónimo', // Nombre del comentarista anónimo
            'correo'=>'anonimo@example.com', //correo del comentarista anónimo
            'body'=>'Este es un comentario anónimo.',
            'aprobado'=> false, //comentario pendiente de aprobacion
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ],

        [
            'publicacion_id'=> 3,//asumiendo que existe una publicacion con id 3
            'usuario_id'=>2, //usuario registro con ID 2
            'nomnre'=>null, 
            'correo'=>null,
            'body'=>'Este es otrocomentario de un usuario registro.',
            'aprobado'=> true,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]
        );
        DB::table('comentarios')->insert($data);
    }
}
