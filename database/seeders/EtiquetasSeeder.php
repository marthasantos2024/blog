<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EtiquetasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run(): void
    {
        // crear etiquetas 

        Etiqueta::create([
            'nombre'=>'Laravel',
            'slug '=>'laravel',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),       
        ]);

        Etiqueta::create([
            'nombre'=>'PHP',
            'slug '=>'php',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),       
        ]);

        Etiqueta::create([
            'nombre'=>'JavaScript',
            'slug '=>'javasccript',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),       
        ]);

        Etiqueta::create([
            'nombre'=>'CSS',
            'slug '=>'css',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),       
        ]);


    }
}
