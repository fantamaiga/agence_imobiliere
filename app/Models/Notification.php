<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    public function contrat()
    {
        return $this->hasMany(Contrat::class);
    }

    public function bien()
    {
        return $this->hasMany(Bien::class);
    }

    public function bail()
    {
        return $this->hasMany(Bail::class);
    }

    public function client()
    {
        return $this->hasMany(Client::class);
    }

    public function proprietaire()
    {
        return $this->hasMany(Proprietaire::class);
    }

    public function agent()
    {
        return $this->hasMany(Agent::class);
    }
    use HasFactory;
}
