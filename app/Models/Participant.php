<?php

namespace App\Models;

use App\Models\Registration;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Participant extends Model
{
    use HasFactory;
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

    public function registration(): HasOne
    {
        return $this->hasOne(Registration::class);
    }
}
