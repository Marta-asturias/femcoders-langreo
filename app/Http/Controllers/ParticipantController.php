<?php

namespace App\Repositories\Workshop;

use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ParticipantRepository  {
private Participant $Participant;

    public function __construct() {
    $this->participant= new Participant(); 
    }

    public function getAll(){
    return $this->participant->all()->sortByDesc("id");
    }

    public function saveParticipant(Request $request)
    {  
        $request->validate([     
            'file' => 'required|mimes:jpg,png|max:2048',
            'title'=> 'required', 
            'details' => 'required',
            'age'  => 'required',
            'duration'  => 'required',
            'format'  => 'required'
        ]);
        $this->workshop->title = $request->get('title');
        $this->workshop->details = $request->get('details');
        $this->workshop->image = $url_file;
        $this->workshop->age = $request->get('age');
        $this->workshop->duration = $request->get('duration');
        return $this->workshop->save();    
    }