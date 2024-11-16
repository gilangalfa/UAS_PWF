<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EventStatus extends Model
{
    use HasFactory;
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
