<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Publicaciones_categoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array([
            'publicacion_id' => 1,
            'categoria_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'publicacion_id' => 1,
            'categoria_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'publicacion_id' => 2,
            'categoria_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'publicacion_id' => 3,
            'categoria_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]
        );

        DB::table('publicaciones_categorias')->insert($data);
    }
}
