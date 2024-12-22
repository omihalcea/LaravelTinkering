<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class videogames extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'videogames';
    protected $fillable = [
        'title',
        'studio',
        'genre',
        'rating',
        'year'
    ];
}
