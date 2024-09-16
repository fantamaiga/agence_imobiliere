<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    public function bail()
    {
        return $this->belogsTo(Bail::class);
    }
 
    public function proprietaire()
    {
        return $this->belongsTo(Proprietaire::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function bien()
    {
        return $this->belongsTo(Bien::class);
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
