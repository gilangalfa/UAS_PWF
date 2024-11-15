<?php

namespace App\Models;

use App\Models\Participant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Registration extends Model
{
    //
    protected $table = 'registrations';
    protected $fillable = ['event_id', 'participant_id'];
    protected $primaryKey = 'registration_id';

    public function events(): BelongsTo
    {
        return $this->belongsTo(Event::class, 'event_id');
    }

    public function participants(): BelongsTo
    {
        return $this->belongsTo(Participant::class, 'participant_id');
    }
}
