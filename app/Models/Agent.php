<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    public function annonce()
        {
            return $this->belongsTo(Annonce::class);
        }
    use HasFactory;
}
