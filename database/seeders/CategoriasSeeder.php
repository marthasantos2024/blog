<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;
use Carbon\Carbon;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return viod
     */
    public function run(): void
    {
        // crear categorias 
        
            $data = array([
            'nombre' => 'Tenología',
            'slug' => 'tecnologia',
            'descripcion' => 'Categoria relacionada con noticias y avances tecnológicos.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],

         [
            'nombre' => 'Salud',
            'slug' => 'salud',
            'descripcion' => 'Categoria sobre salud, bienestar y medicina.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
         ],

        [
            'nombre' => 'Deportes',
            'slug' => 'deportes',
            'descripcion' => 'Noticias y eventos relaciados con deportes.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]
    );
    DB::table('Categorias')->insert($data);
    }
}
