<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuarioSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuario_existente = User::where('email', 'usuario@usuario.com')->first();

        if(!$usuario_existente) {
            User::factory(1)->create();
        }
    }
}
