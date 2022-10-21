<?php

namespace App\Mail;

use App\Models\EmailF5;
use App\Models\Participant;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class EmailReceived extends Mailable

{
    use Queueable, SerializesModels;

  


    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build(Request $request )
{
    

    return $this->view('mails.email')
        ->subject('Thank you for subscribing to our newsletter')
        ->from('system@yoursite.com', 'System')
        ->with('data', $this->data);
}
}