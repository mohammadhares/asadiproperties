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
            'title' => $faker->sentence,
            'content' => $faker->paragraph,
            'address' => $faker->address,
            'longitude' => $faker->longitude,
            'latitude' => $faker->latitude,
            'price' => $faker->numberBetween(10000, 1000000),
            'size' => $faker->numberBetween(500, 5000),
            'bedrooms' => $faker->numberBetween(1, 5),
            'bathrooms' => $faker->numberBetween(1, 3),
            'year_built' => $faker->date,
            'features' => $faker->sentence,
            'property_type' => $faker->word,
            'status' => $faker->randomElement(['For Sale', 'For Rent']),
            'created_by' => $faker->numberBetween(1, 10),
        ];
    }
}
