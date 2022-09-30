<?php

namespace App\Http\Controllers;

use App\Repositories\Participant\ParticipantRepository;
use Illuminate\Http\Request;



class ParticipantController  {
private ParticipantRepository $participant;

    public function __construct() {
    $this->participant= new ParticipantRepository(); 
    }

    public function index(){
    return $this->participant->all()->sortByDesc("id");
    return view("participant")->with('participant', $participant);
    }

    public function createParticipant(){
        return view("welcome");

    }

    public function save(Request $request)
    {
        $this->repository->saveParticipant($request);
        return $this->index();
    }
}
