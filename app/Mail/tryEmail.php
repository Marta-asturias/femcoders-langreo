<?php

namespace App\Mail;

use App\Models\Participant;
use App\Repositories\Participant\ParticipantRepository;
use GuzzleHttp\Psr7\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class tryEmail extends Mailable
{
    use Queueable, SerializesModels;

    private ParticipantRepository $participantRepository;
    // private Participant $participant;

    public function __construct()
    {
        $this->participantRepository = new ParticipantRepository();
        // $this->participant= new Participant();
    }

    public $subject = 'Prueba de Email';

  
    
    public function build()
    {
        $participant = $this->participantRepository->getAll();
        return $this->view('Mail.TryEmail')->with('participant', $participant);;
    }
}
