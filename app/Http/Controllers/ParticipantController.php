<?php

namespace App\Http\Controllers;

use App\Repositories\Participant\ParticipantRepository;
use Illuminate\Http\Request;



class ParticipantController  {

private ParticipantRepository $repository;

    public function __construct() {
    $this->repository= new ParticipantRepository(); 
    }

    public function index(){
    $participant = $this->repository->getall();
    return view('participant')->with('participant', $participant);

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
