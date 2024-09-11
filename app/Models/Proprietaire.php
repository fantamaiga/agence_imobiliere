<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proprietaire extends Model
{
    public function annonce()
    {
        return $this->belongsTo(Annonce::class);
    }

    public function document()
    {
        return $this->hasMany(Document::class);
    }
    use HasFactory;
}
