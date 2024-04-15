<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Location>
 */
class LocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'dateLocation' => fake()->date(),
            'dureeLocation' => fake()->randomDigit(),
            'restorer' => fake()->boolean(),
            'user_id' => fake()->numberBetween(1, 5),
            'car_id' => fake()->numberBetween(1, 5)
        ];
    }
}
