<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function avis()
    {
        return $this->belongsTo(Avis::class);
    }

    public function bail()
    {
        return $this->hasMany(Bail::class);
    }

    public function document()
    {
        return $this->hasMany(Document::class);
    }

    public function annonce()
    {
        return $this->hasMany(Annonce::class);
    }

    public function contrat()
    {
        return $this->hasMany(Contrat::class);
    }

    use HasFactory;
}
