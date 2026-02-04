<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class orderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //status	user_id
        return [
            'status' => fake()->randomElement(['waiting', 'approved', 'rejected']),
            'user_id' => User::wherein('role_id', [2, 3])->inRandomOrder()->first()->id,
        ];
    }
}
