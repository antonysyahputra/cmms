<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit_asset extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'unit_id',
        'asset_id',
    ];
}
