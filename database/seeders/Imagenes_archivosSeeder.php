<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Imagenes_archivosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run(): void
    {
        //archivos de imagenes
        ImagenArchivo::create([
            'nombre_archivos' => 'imagen1.jpg',
            'ruta_archivos' => 'uploads/imagenes/imagen1.jpg',
            'tipo_archivo' => 'image/jpeg',
            'size' => 1048576, // Tamaño en bytes (1 MB)
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        ImagenArchivo::create([
            'nombre_archivos' => 'documento.pdf',
            'ruta_archivos' => 'uploads/documentos/documento.pdf',
            'tipo_archivo' => 'aplication/pdf',
            'size' => 204800, // Tamaño en bytes (200 MB)
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        ImagenArchivo::create([
            'nombre_archivos' => 'audio.mp3',
            'ruta_archivos' => 'uploads/audios/audio.mp3',
            'tipo_archivo' => 'audio/mpeg',
            'size' => 5120000, // Tamaño en bytes (5 MB)
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]); 
    }
}
