<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Seminar>
 */
class SeminarFactory extends Factory
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
            'name' => fake()->sentence(4),
            'description' => fake()->text(),
            'max_participants' => fake()->randomNumber(3, true),
            'current_participants' => fake()->randomNumber(2, true),
            'held_date' => fake()->dateTime(),

        ];
    }
}
