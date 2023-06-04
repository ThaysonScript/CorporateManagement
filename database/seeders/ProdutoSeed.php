<?php

namespace Database\Seeders;

use Database\Factories\ProdutoFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProdutoFactory::factory(10);
    }
}
