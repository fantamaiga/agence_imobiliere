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

    public function avis()
    {
        return $this->belongsTo(Avis::class);
    }

    public function bail()
    {
        return $this->hasMany(Bail::class);
    }

    public function contrat()
    {
        return $this->hasMany(Contrat::class);
    }

    use HasFactory;
}
