<?php

namespace App\Http\Controllers;

use App\Mail\InscriptionMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function try(){
        $mail = new InscriptionMail;

        Mail::to('Sarap120298@gmail.com')->send($mail);
        return 'Mensaje Enviado';
    }
}
