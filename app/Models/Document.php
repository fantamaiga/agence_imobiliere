<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public function proprietaire()
    {
        return $this->belongsTo(Proprietaire::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function bail()
    {
        return $this->belongsTo(Bail::class);
    }

    public function contrat()
    {
        return $this->belongsTo(Contrat::class);
    }

    public function bien()
    {
        return $this->belongsTo(Bien::class);
    }

    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }


    use HasFactory;
}
