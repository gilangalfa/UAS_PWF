<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventCategory extends Model
{
    //
    protected $table = 'event_categories';
    protected $fillable = ['name', 'slug'];

    public function workshops(): HasMany
    {
        return $this->hasMany(Workshop::class);
    }

    public function seminars(): HasMany
    {
        return $this->hasMany(Seminar::class);
    }
}
