<?php

namespace App\Http\Controllers;

use App\Mail\tryEmail;
use App\Repositories\Participant\ParticipantRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    private ParticipantRepository $participantRepository;

    public function __construct(){
        $this->repository = new ParticipantRepository;
    }
        
    public function tryEmail(Request $request) {
        $participant = $this->participantRepository->getByemail($request);
        $mail = new tryEmail;

        Mail::to($participant)->send($mail);
        return 'Mensaje Enviado';

    }
}
