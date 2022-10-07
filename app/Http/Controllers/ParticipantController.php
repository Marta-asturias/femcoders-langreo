<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use App\Repositories\Participant\ParticipantRepository;
use App\Repositories\Workshop\WorkshopRepository;
use Illuminate\Http\Request;



class ParticipantController  {

private ParticipantRepository $participantRepository;
private WorkshopRepository $workshopRepository;

    public function __construct() {
    $this->participantRepository= new ParticipantRepository();
    $this->workshopRepository= new WorkshopRepository();
    }

    public function index(){
    $participant = $this->participantRepository->getall();
    $workshop = $this->workshopRepository->getAll();
    return view('participant')->with(['participant' => $participant, 'workshop' => $workshop]);

    }

    public function createParticipant(){
        return view("participant");
   

    }

    public function save(Request $request)
    {
        if (isset($_POST['sendForm'])) {
            if (isset($_POST['legals']) && $_POST['legals'] == '1')
                echo '<div class="alert alert-success">Has aceptado correctamente las condiciones de uso.</div>';
                $this->participantRepository->saveParticipant($request);
                return $this->index();
 
}
}
}

/* $workshop = $this->repository->getAll();
$this->repository->updateWorkshop($request,$id);
return view('/workshops')->with('workshop',$workshop); */