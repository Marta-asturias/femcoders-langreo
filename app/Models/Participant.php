<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name', 
        "last_name",
        "birth_date",
        'email',
        "whatsapp",
        "city",
        "how_did_you_meet_us",
<<<<<<< HEAD
        // "legals",
=======
        "legals",
>>>>>>> 8275c5bd88a6d9b684ce9668e86ada2081b00f98
    ];

    public function workshops(){
        return $this->belongsToMany(Workshop::class)->withTimestamps();;
    }
}
