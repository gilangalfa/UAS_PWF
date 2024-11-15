<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    //
    protected $table = 'speakers';
    protected $fillable = [
        'name',
        'bio',
        'expertise',
        'contact_email',
        'contact_phone',
    ];

    public function seminars(): HasMany 
    {
       return $this->hasMany(Seminar::class);
    }

    public function workshops(): HasMany 
    {
       return $this->hasMany(Workshop::class);
    }
}
