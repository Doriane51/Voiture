<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom' => fake()->name(),
            'marque' => fake()->name(),
            'photo' => 'la photo',
            'description' => fake()->paragraph(),
            'prixLocation' => fake()->numberBetween(10000, 100000),
            'quantiteDispo' => fake()->randomDigit()
        ];
    }
}
