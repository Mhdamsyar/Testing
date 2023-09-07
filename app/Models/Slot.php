<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    use HasFactory;
    public function theater()
    {
        return $this->belongsTo(Theater::class, 'theater_id', 'theater_id');
    }
}
