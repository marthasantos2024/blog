<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([]);

        //Llamamos las clases Seeder que deseamos ejecutar
        $this -> call([
           CategoriasSeeder::class,
           ComentariosSeeder::class,
           ConfiguracionesSeeder::class,
           EtiquetasSeeder::class,
           Imagenes_archivosSeeder::class,
           Publicaciones_categoriasSeeder::class,
           Publicaciones_etiquetasSeeder::class,
           PublicacionesSeeder::class,
           RolesSeeder::class,
           UsuariosSeeder::class
        ]);
    }
}
