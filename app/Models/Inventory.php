<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'code_inventory',
        'product_id',
        'department_id',
    ];

    public function product() {
        return $this->belongsTo(Product::class);
    }

    public function room() {
        return $this->belongsTo(Room::class);
    }
}
