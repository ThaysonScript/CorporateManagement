<?php

namespace Database\Factories\Cadastros;

use Faker\Provider\Fakecar;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cadastros\Categoria>
 */
class CategoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $this->faker->addProvider(new Fakecar($this->faker));
        $vehicle = $this->faker->vehicleArray();

        // $vehicle['brand']

        $automoveis_marca = $this->faker->vehicleBrand;

        return [
            'user_id' => 1,
            'estoques_id' => 1,
            'tituloCategoria' => $automoveis_marca,
            'descricaoCategoria' => 'Automoveis da marca: ' . $automoveis_marca
        ];
    }
}
