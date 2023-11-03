<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PropertyFactory extends Factory
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
            'city' => fake()->city,
            'country' => fake()->country,
            'address' => fake()->address,
            'thumbnail' => fake()->imageUrl(),
            'longitude' => fake()->longitude,
            'latitude' => fake()->latitude,
            'price' => fake()->numberBetween(10000, 1000000),
            'size' => fake()->numberBetween(500, 5000),
            'bedrooms' => fake()->numberBetween(1, 10),
            'bathrooms' => fake()->numberBetween(1, 5),
            'year_built' => fake()->date,
            'features' => fake()->text,
            'property_type' => fake()->word,
            'status' => fake()->randomElement(['SALE', 'RENT']),
            'modified_by' => fake()->numberBetween(1, 10),
        ];
    }
}
