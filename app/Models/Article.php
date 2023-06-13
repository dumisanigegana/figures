<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cartegory;

class Article extends Model
{
    use HasFactory;
    
    protected $fillable = ['slug', 'category_id', 'title', 'body', 'featured', 'image', 'active'];
    /**
     * Get the Cartegory that owns the Article
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cartegory(): BelongsTo
    {
        return $this->belongsTo(Cartegory::class);
    }
}
