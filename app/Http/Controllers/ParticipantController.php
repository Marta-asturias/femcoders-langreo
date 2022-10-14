<?php

namespace App\Http\Controllers;

use App\Repositories\Participant\ParticipantRepository;
use App\Repositories\Workshop\WorkshopRepository;
use Illuminate\Http\Request;



class ParticipantController
{

    private ParticipantRepository $repository;
    private WorkshopRepository $workshopRepository;

    public function __construct()
    {
        $this->repository = new ParticipantRepository();
        $this->workshopRepository = new WorkshopRepository();
    }

    public function index()
    {
        $participant = $this->repository->getall();
        $workshop = $this->workshopRepository->getAll();
        
        /* return view('participant')->with([
            'participant' => $participant,
            'workshop' => $workshop
        ]); */
    }

    public function createParticipant(Request $request, $id)
    {
        $workshop = $this->workshopRepository->getWorkshop($id);
        if (!$workshop) {
            return view('workshop.notexist');
        }
        return view('participant')->with('workshop', $workshop);
    }

    public function save(Request $request, $id)
    {

        if (isset($_POST['sendForm'])) {
            if (isset($_POST['legals']) && $_POST['legals'] == '1')
                echo '<div class="alert alert-success">Has aceptado correctamente las condiciones de uso.</div>';
            $this->repository->saveParticipant($request, $id);
            return redirect(route('getWorkshops'),302);
        }

        return redirect(route('getWorkshops'),302);
    }
}
