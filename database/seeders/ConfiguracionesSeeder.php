<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ConfiguracionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $data = array([
           'key'=> 'Nombre_del_sitio',
           'value' => 'Mi sitio web',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now()
       ],
       [
           'key'=> 'Descripcion_del_sitio',
           'value' => 'Esta es la descripcion de mi sitio web ',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now()
       ],
       [
           'key'=> 'Contacto_emil',
           'value' => 'Contacto@misitio.com ',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now()
       ],
       [
           'key'=> 'Modo_mantenimiento',
           'value' => 'Apagada',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now()
       ]
    );
    DB::table('configuraciones')->insert($data);
    }
}
