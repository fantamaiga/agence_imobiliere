<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    public function notification()
    {
        return $this->belongsTo(Notification::class);
    }
    
    public function catalogue()
        {
            return $this->belongsTo(Catalogue::class);
        }

        public function document()
        {
            return $this->hasMany(Document::class);
        }
    use HasFactory;
}
