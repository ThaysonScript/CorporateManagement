<?php

namespace Database\Seeders\Cadastros;

use App\Models\Cadastros\Estoque;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class EstoqueSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Estoque::factory(1)->create();
    }
}
