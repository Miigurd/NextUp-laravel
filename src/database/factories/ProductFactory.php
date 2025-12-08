<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->words(2, true),
            'price' => $this->faker->numberBetween(80, 500),
            'discount' => $this->faker->numberBetween(5, 30),
            'note' => $this->faker->sentence(2),
            'image' => '/images/default.png',
            'description' => $this->faker->sentence(10),
            'category' => $this->faker->randomElement([
                'Scented Candle Line',
                'Home Fragrance Line',
                'Bath & Body Aromatic Line',
                'Signature Collection Line',
            ]),
        ];
    }
}
