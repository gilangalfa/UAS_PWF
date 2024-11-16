<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Speaker>
 */
class SpeakerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => fake()->sentence(2),
            'bio' => fake()->sentence(10),
            'expertise' => fake()->sentence(3),
            'contact_email' => fake()->unique()->safeEmail(),
            'contact_phone' => fake()->numberBetween(1, 10),
        ];
    }
}
