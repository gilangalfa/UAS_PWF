<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventStatus extends Model
{
    //
    protected $table = 'event_statuses';
    protected $fillable = ['name'];

    public function workshops(): HasMany
    {
        return $this->hasMany(Workshop::class);
    }

    public function seminars(): HasMany
    {
        return $this->hasMany(Seminar::class);
    }
}
