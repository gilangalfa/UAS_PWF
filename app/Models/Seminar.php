<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seminar extends Model
{
    //

    use HasFactory;

    protected $table = 'seminars';
    protected $fillable = [
    'name', 
    'description', 
    'max_participants',
    'current_participants',
    'held_date',
    'venue',
    'online_platform',
    'online_link',
    'ticket_price',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(EventCategory::class);
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(EventStatus::class);
    }

    public function speaker(): BelongsTo
    {
        return $this->belongsTo(Speaker::class);
    }

    public function registrations(): HasMany
    {
        return $this->hasMany(Registration::class);
    }
    
    public function participant_requirements(): HasMany
    {
        return $this->hasMany(ParticipantRequirement::class);
    }
}
