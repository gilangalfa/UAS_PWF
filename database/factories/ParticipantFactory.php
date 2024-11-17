<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Participant>
 */
class ParticipantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(4),
            'location' => 'Kabupaten '.fake()->sentence(3),
            'educational_level' => 'Sekolah '.fake()->sentence(3),
            'email' => fake()->unique()->safeEmail(),
            'phone_number' => fake()->numberBetween(1, 10),
            
        ];
    }
}
