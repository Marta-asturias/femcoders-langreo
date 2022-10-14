<?php

namespace App\Repositories\Participant;

use App\Models\Participant;
use Illuminate\Http\Request;


class ParticipantRepository{

    private Participant $participant;

    public function __construct() {
        $this->participant= new Participant(); 
        }
    public function getAll(){
        return $this->participant->all()->sortByDesc("id");
        }
    public function saveParticipant(Request $request,$id)
    {  
            /* $request->validate([     
                'first_name'=> 'required', 
                'last_name' => 'required',
                'birth_date'  => 'required',
                'email'  => 'required',
                'whatsapp'  => 'required',
                'city'  => 'required',
                'how_did_you_meet_us'  => 'required',
                'legals'  => 'required',
                'date' => 'required',
            ]); */

            
            $this->participant->first_name = $request->get('first_name');
            $this->participant->last_name = $request->get('last_name');
            $this->participant->birth_date = $request->get('birth_date');
            $this->participant->email = $request->get('email');
            $this->participant->whatsapp = $request->get('whatsapp');
            $this->participant->city = $request->get('city');
            $this->participant->how_did_you_meet_us = $request->get('how_did_you_meet_us');
            $this->participant->legals = $request->get('legals');
            $this->participant->date = $request->get('date');
            
            $newParticipant = $this->participant->save();    

            $this->participant->workshops()->attach($id);

            //pivot workshop
/*             $participant->workshops()->sync([ $workshop->id ]);
            $date->workshops()->sync([ $workshop->id ]); */
            return $newParticipant;
        }






}