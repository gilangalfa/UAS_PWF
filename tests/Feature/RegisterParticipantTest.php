<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Auth;

class RegisterParticipantTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_guest_registered_successfully(): void
    {

        $participant = [
            'name' => 'adli',
            'location' => 'Kab.',
            'educational_level' => 'SMA',
            'email' => 'adlisuryadin@gmail.com',
            'phone_number' => '000000000000',
        ];
        $response = $this->postJson('/api/register', $participant);

        $response->assertStatus(200);
        $response->assertJson([
            'status' => true,
            'message' => "Guess successfully registered as participant",
            'data' => $participant,
            'token_type' => 'Bearer',
        ]);
    }
}
