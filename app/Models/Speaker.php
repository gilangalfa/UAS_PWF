<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Speaker extends Model
{
    use HasFactory;
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
