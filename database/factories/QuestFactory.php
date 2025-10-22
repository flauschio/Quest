<?php

namespace Database\Factories;

use App\Models\Region;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Quest>
 */
class QuestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'difficulty' => fake()->randomElement(['Easy', 'Normal', 'Hard', 'Extreme']),
            'description' => fake()->realText(100),
            'region_id' => Region::inRandomOrder()->first()->id,
            'reward' => fake()->randomElement(['100 Gold Shingles', 'Bag of Rare Gems', '1000 Gold Shingles', 'Legendary Sword', '2500 Gold Shingles']),
        ];
    }
}
