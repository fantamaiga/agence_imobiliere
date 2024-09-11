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

    use HasFactory;
}
