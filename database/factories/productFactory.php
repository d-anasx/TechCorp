<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class productFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // name	price	isPremium	quantity	photo_path
        return [
            'name'=>fake()->name(),
            'price'=>fake()->numberBetween(10,500),
            'isPremium'=>fake()->boolean(),
            'quantity'=>fake()->numberBetween(0,100),
            'photo_path'=>fake()->imageUrl(),
        ];
    }
}
