<?php

namespace App\Models;

use App\Models\Participant;
use App\Models\Registration;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';
    protected $fillable = ['event_name', 'description', 'date', 'max_participants'];
    protected $primaryKey = 'event_id';

    public function registrations(): HasMany
    {
        return $this->hasMany(Registration::class, 'event_id');
    }
  
}
