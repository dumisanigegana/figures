<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contractor extends Model
{
    protected $fillable = ['reg_num', 'email', 'entity_name', 'business_line', 'company_number', 'address', 'e_phone', 'website', 'director_name', 'd_phone', 'fname', 'designation', 'terms', 'reg_date'];
    //protected $date = ['reg_date'];

    use HasFactory;

    /**
     * Get all of the references for the Contractor
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function references(): HasMany
    {
        return $this->hasMany(Reference::class);
    }
}
