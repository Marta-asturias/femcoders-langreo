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
        "date",
        "legals",
    ];

    public function workshops(){
        return $this->belongsToMany(Workshop::class)->withTimestamps();;
    }
}
