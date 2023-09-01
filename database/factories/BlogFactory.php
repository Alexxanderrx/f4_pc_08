<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'path' => fake()->imageUrl(),
            'type' => fake()->randomElement($array = array('BUSINESS', 'DEVELOPMENT')),
            'name' => fake()->name(),
            'description' => fake()->sentence($nbWords = 20, $variableNbWords = true),
            'pathUser' => fake()->imageUrl(),
            'nameUser' => fake()->name(),
            'date' => fake()->date(),
        ];
    }
}
