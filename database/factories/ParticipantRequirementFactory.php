<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Seminar;
use App\Models\Workshop;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ParticipantRequirement>
 */
class ParticipantRequirementFactory extends Factory
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
            
            'requirement' => fake()->sentence(15),

            'seminar_id' => Seminar::factory(),
            'workshop_id' => Workshop::factory(),
        ];
    }
}
