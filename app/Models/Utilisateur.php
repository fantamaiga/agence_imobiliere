<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    public function message()
    {
        return $this->hasMany(Message::class);
    }
    use HasFactory;
}
