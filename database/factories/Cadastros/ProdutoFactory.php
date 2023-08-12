<?php

namespace Database\Factories\Cadastros;

use App\Models\Cadastros\Categoria;
use Faker\Provider\Fakecar;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cadastros\Produto>
 */
class ProdutoFactory extends Factory
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

        return [
            'user_id' => 1,
            'categorias_id' => function () {
                return Categoria::factory()->create()->id;
            },
            'tituloProduto' => $vehicle['model']
        ];
    }
}
