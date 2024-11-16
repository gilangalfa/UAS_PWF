<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EventCategory extends Model
{
    use HasFactory;
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
