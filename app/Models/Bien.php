<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bien extends Model
{
    public function annonce()
    {
        return $this->belongsTo(Annonce::class);
    }

    public function proprietaires()
    {
        return $this->hasMany(Proprietaire::class);
    }
    use HasFactory;
}
