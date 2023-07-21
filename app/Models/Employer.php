<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{    
    protected $fillable = ['fname', 'address', 'email', 'phone', 'terms' ];

    /**
     * Get all of the profesion for the Employer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function profesion(): HasMany
    {
        return $this->hasMany(Profesion::class);
    }
}
