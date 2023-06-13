<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Articles;

class Category extends Model
{
    protected $fillable = ['name', 'description'];
    
    use HasFactory;
    /**
     * Get all of the articles for the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }
}
