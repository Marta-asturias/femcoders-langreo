<?php

namespace App\Http\Controllers;

use App\Mail\tryEmail;
use App\Repositories\Participant\ParticipantRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    private ParticipantRepository $participantRepository;
    //private ParticipantController $participantController;

    public function __construct()
    {
        $this->participantRepository = new ParticipantRepository();
        
    }

    public function tryEmail(Request $request, $id) {
        $participant = $this->participantRepository->getall();
        $mail = new tryEmail;


       // Mail::to($participant->user())->send(new MailableClass);
        Mail::to('graxyherrera@gmail.com')->send($mail);
        return redirect(route('getWorkshops'),302);;

    }
}
