<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    public $fillable = [
        'title',
        'date',
        'content',
        'author',
    ];

    protected $casts = [
        'date' => 'date',
    ];
}
