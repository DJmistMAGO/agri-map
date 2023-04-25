<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoilParam extends Model
{
    use HasFactory;

    protected $fillable = [
        'land_type',
        'soil_type',
        'soil_temperature',
        'soil_moisture',
        'soil_ph',
    ];

    protected $casts = [
        'polygon' => 'array'
    ];
}
