<?php

namespace App\Http\Controllers;

use App\Models\Participant;
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
        return view("participant");
   

    }

    public function save(Request $request)
    {
        if (isset($_POST['sendForm'])) {
            if (isset($_POST['legals']) && $_POST['legals'] == '1')
                echo '<div class="alert alert-success">Has aceptado correctamente las condiciones de uso.</div>';
                $this->repository->saveParticipant($request);
                return $this->index();
 
}
}
}

/* $workshop = $this->repository->getAll();
$this->repository->updateWorkshop($request,$id);
return view('/workshops')->with('workshop',$workshop); */