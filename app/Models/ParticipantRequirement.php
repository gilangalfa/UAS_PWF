<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParticipantRequirement extends Model
{
    //
    protected $table = 'participant_requirements';
    protected $fillable = [
        'requirement',
    ];

    public function seminar(): BelongsTo 
    {
        return $this->belongsTo(Seminar::class);
    }
    
    public function workshop(): BelongsTo 
    {
        return $this->belongsTo(Workshop::class);
    }
    
}
