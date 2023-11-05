<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
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
            'content' => fake()->text,
            'developer' => fake()->name,
            'city' => fake()->city,
            'country' => fake()->country,
            'address' => fake()->address,
            'longitude' => fake()->longitude,
            'latitude' => fake()->latitude,
            'price' => fake()->numberBetween(10000, 1000000),
            'features' => fake()->text,
            'thumbnail' => fake()->randomElement(['assets/images/listings/list-1.jpg', 'assets/images/listings/list-3.jpg',  'assets/images/listings/list-4.jpg',  'assets/images/listings/list-5.jpg', 'assets/images/listings/list-2.jpg']),
            'payment_plans' => fake()->randomElement(['50%', '100%', '25%']),
            'project_type' => fake()->randomElement(['Apartment', 'Villa']),
            'status' => fake()->randomElement(['SALE', 'RENT']),
            'created_by' => fake()->numberBetween(1, 10),
        ];
    }
}
