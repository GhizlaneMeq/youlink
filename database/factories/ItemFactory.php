<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'picture' => $this->faker->imageUrl(),
            'description' => $this->faker->paragraph(),
            'category' => $this->faker->word(),
            'status' => $this->faker->randomElement(['lost', 'found']),
            'location' => $this->faker->address(),
            'dateLost' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'dateFound' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'owner_id' => function () {
                return \App\Models\User::factory()->create()->id;
            },
            'creator_id' => function () {
                return \App\Models\User::factory()->create()->id;
            },
        ];
    }
}
