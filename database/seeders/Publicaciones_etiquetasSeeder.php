<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Publicaciones_etiquetasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array([
            'publicacion_id' => 1, // id de una publicacion exixtente
            'etiqueta_id' => 1, //id de una etiqueta existente 
            'created_at' => Carbon::now(),
            'updated' => Carbon::now()
        ],
        [
            'publicacion_id' => 1,
            'etiqueta_id' => 2,
            'created_at' => Carbon::now(),
            'updated' => Carbon::now()
        ],
        [
            'publicacion_id' => 2,
            'etiqueta_id' => 1,
            'created_at' => Carbon::now(),
            'updated' => Carbon::now()
        ],
        [
            'publicacion_id' => 2,
            'etiqueta_id' => 3,
            'created_at' => Carbon::now(),
            'updated' => Carbon::now()
        ]
    );
        DB::table('Publicaciones_etiquetas')->insert($data);
    }
}
