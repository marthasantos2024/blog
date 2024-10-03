<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;
use Carbon\Cardon;

class PublicacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return  viod
     */
    public function run(): void
    {
       //craer  publicaciones
       $data = array([
        'titulo'=>'Primera Publicación',
        'slug'=>'primera-publicacion',
        'body'=>'Este es el contenido de la primera publicación.',
        'extracto'=>'Este es un extracto opcional de la primera publicación.',
        'ususario_id'=> 1, //Aumiendo que ya tienes usuarios en la tabla usuarios
        'estado'=>'published',//puedes tenr estados como draft o published
        'imagen_fracturada'=>'imagen1.jpg',//imagen opcional
        'publicado_en'=>Carbon::now(),//fecha de publicacion
       ],

       [
        'titulo'=>'Segunda Publicación',
        'slug'=>'Segunda-publicacion',
        'body'=>'Este es el contenido de la segunda publicación.',
        'extracto'=>'Extracto de la segunda publicación.',
        'ususario_id'=> 2, //relacion con otro usuario
        'estado'=>'draft',
        'imagen_fracturada'=>'imagen2.jpg',
        'publicado_en'=> null,// au no publicada

       ],

       [
        'titulo'=>'Tercera Publicación',
        'slug'=>'tercera-publicacion',
        'body'=>'Contenido más detallado de la tercera publicación.',
        'extracto'=>null,//sin extracto
        'ususario_id'=> 1, //relacion con otro usuario
        'estado'=>'published',
        'imagen_fracturada'=>'imagen3.jpg',
        'publicado_en'=>Carbon::parse('2024-01-15'),// fecha de publicación

       ]
    );
    DB::table('configuraciones')->insert($data);
    }

}
