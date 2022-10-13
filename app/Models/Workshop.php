<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image',
        'details',
        'age',
        'duration',
        'format',
        'date1',
<<<<<<< HEAD
        'date2',
        'date3',
        'date4',
=======

>>>>>>> pivot
    ];

    public function participants(){
        return $this->belongsToMany(Participant::class)->withTimestamps();
    }

    public function dates(){
        return $this->belongsToMany(Date::class)->withTimestamps();
    
}
}