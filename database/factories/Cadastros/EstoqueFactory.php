<?php

namespace Database\Factories\Cadastros;

use Faker\Provider\Fakecar;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Auth;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cadastros\Estoque>
 */
class EstoqueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'titulo' => 'Veiculos',
            'descricao' => 'tipos de veiculos'
        ];
    }
}
