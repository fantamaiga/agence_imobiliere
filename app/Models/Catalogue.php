<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalogue extends Model
{
    public function agent()
    {
        return $this->hasMany(Agent::class);
    }

    public function bien()
    {
        return $this->belongsTo(Bien::class);
    }
    use HasFactory;
}
