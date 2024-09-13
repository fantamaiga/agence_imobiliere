<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avis extends Model
{ public function client()
    {
        return $this->hasMany(Client::class);
    }

    public function bien()
    {
        return $this->belongsTo(Bien::class);
    }

    public function proprietaire()
    {
        return $this->hasMany(Proprietaire::class);
    }
    use HasFactory;
}
