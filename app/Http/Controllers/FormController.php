<?php

namespace App\Http\Controllers;

use App\Models\Workshop;
use App\Repositories\Workshop\WorkshopRepository;
use Illuminate\Http\Request;

class FormController extends Controller
{

    private WorkshopRepository $repository;

    public function __construct() {

        $this->repository = new WorkshopRepository;
        // parent::__construct();

    }
    public function createParticipant(){
        $workshop=Workshop::take(5)->orderBy('id', 'desc')->get();
        return view("participant")->with('workshop', $workshop);
    }
}
