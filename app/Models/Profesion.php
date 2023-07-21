<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profesion extends Model
{
    protected $fillable = ['code', 'name'];

    /**
     * The employers that belong to the Profesion
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function employers(): BelongsToMany
    {
        return $this->belongsToMany(Employer::class);
    }

    /**
     * The contactors that belong to the Profesion
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function contactors(): BelongsToMany
    {
        return $this->belongsToMany(Contractor::class);
    }
}
