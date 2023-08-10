<?php

namespace Database\Seeders\Cadastros;

use App\Models\Cadastros\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produto::factory(5)->create();
    }
}
