<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Receita>
 */
class ReceitaFactory extends Factory {

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() {
        return [
            'titulo' => $this->faker->name,
            'ingredientes' => $this->faker->sentence(3),
            'preparo' => $this->faker->sentence(3)
        ];
    }

}
