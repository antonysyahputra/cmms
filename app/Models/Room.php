<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'unit_id',   
    ];

    public function inventory() {
        return $this->hasMany(Inventory::class);
    }
}
