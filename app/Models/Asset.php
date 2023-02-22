<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'product_id',
        'unit_id',
    ];

    public function product() {
        return $this->belongsTo(Product::class);
    }
    
    public function room() {
        return $this->belongsTo(Room::class);
    }
}
