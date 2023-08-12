<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Seeders\Cadastros\EstoqueSeed;
use Database\Seeders\Cadastros\CategoriaSeed;
use Database\Seeders\Cadastros\ProdutoSeed;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // ProdutoSeed::class;
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            UsuarioSeed::class,
            EstoqueSeed::class,
            CategoriaSeed::class,
            ProdutoSeed::class
        ]);
    }
}
