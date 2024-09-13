<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bail extends Model
{
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function proprietaire()
    {
        return $this->belongsTo(Proprietaire::class);
    }

    public function contrat()
    {
        return $this->hasMany(Contrat::class);
    }
    use HasFactory;
}
