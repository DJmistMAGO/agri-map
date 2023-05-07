<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgriGallery extends Model
{
    use HasFactory;

    public $fillable = [
        'image'
    ];
    
}
