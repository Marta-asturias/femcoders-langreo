<?php

namespace App\Http\Controllers;

use App\Mail\tryEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function tryEmail() {
        $mail = new tryEmail;

        Mail::to('Sarap120298@gmail.com')->send($mail);
        return 'Mensaje Enviado';

    }
}
