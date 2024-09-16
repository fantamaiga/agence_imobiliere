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

    public function proprietaire()
    {
        return $this->hasMany(Proprietaire::class);
    }

    public function avis()
    {
        return $this->hasMany(Avis::class);
    }

    public function catalogue()
    {
        return $this->hasMany(Catalogue::class);
    }

    public function contrat()
    {
        return $this->hasMany(Contrat::class);
    }
    
    public function document()
    {
        return $this->hasMany(Document::class);
    }

    public function notification()
    {
        return $this->belongsTo(Notification::class);
    }
    use HasFactory;
}
