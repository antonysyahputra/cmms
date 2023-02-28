<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'brand',
        'specification',
        'category_id',
    ];

    /**
     * Get all of the assets for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function scopeFilter($query, array $filters) {
        if($filters['category'] ?? false) {
            $query->where('category_id', request('category'));
        }
    }
    
    public function assets()
    {
        return $this->hasMany(Asset::class);
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
