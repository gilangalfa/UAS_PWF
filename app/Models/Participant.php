<?php

namespace App\Models;

use App\Models\Registration;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;

class Participant extends Model
{
    use HasApiTokens, HasFactory;
    //
    protected $table = 'participants';
    protected $fillable = [
        'name',
        'location',
        'educational_level',
        'email', 
        'phone_number',
    ];
    // protected $primaryKey = 'participant_id';

    public function registrations(): HasMany
    {
        return $this->hasMany(Registration::class);
    }
}
