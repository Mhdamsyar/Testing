<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $fillable = [
        'username',
        'rating',
        'description',
    ];

    public function movies()
    {
        return $this->belongsTo(Movie::class);
    }

}

