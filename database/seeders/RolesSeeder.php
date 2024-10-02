<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Schema::create('roles',function (Blueprint $table)) ({
        //     $table->id();
        //     $table->string('name');
        //     $table->timestamps();
        // });
    }
    //tabla intermedia si un usuario tener multiples roles
    Schema::create('roles_user',)
}
