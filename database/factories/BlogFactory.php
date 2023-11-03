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
            'title' => fake()->sentence,
            'content' => fake()->paragraph,
            'image' => fake()->randomElement(['assets/images/listings/list-1.jpg', 'assets/images/listings/list-3.jpg',  'assets/images/listings/list-4.jpg',  'assets/images/listings/list-5.jpg', 'assets/images/listings/list-2.jpg']),
        ];
    }
}
