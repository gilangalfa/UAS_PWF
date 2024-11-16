<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

use App\Models\Speaker;
use App\Models\EventCategory;
use App\Models\EventStatus;

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
            'slug' => Str::slug(fake()->sentence(3)),
            'description' => fake()->text(200),
            'max_participants' => fake()->randomNumber(3, true),
            'current_participants' => fake()->randomNumber(2, true),
            'held_date' => fake()->dateTime(),
            
            'speaker_id' => Speaker::factory(),
            'status_id' => EventStatus::factory(),
            'category_id' => EventCategory::factory(),
        ];
    }
}
