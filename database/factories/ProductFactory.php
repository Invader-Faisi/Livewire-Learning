<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ProductFactory extends Factory
{

    public function definition(): array
    {
        return [
            'title' => fake()->unique()->name(),
            'description' => Str::random(10),
            'price' => fake()->numberBetween(1000, 5000)
        ];
    }
}
