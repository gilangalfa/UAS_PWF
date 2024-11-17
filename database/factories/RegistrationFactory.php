<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Seminar;
use App\Models\Workshop;
use App\Models\Participant;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Registration>
 */
class RegistrationFactory extends Factory
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
            
            
            'seminar_id' => Seminar::factory(),
            'workshop_id' => Workshop::factory(),
            'participant_id' => Participant::factory(),
        ];
    }
}
