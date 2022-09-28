<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\contract\Mailer; //Importante incluir la clase Mail, que será la encargada del envío
use Illuminate\Contracts\Mail\Mailer as MailMailer;

class EmailController extends Controller
{

    public function contact(Request $request){
        $subject = "Asunto del correo";
        $for = "correo_que_recibira_el_mensaje@gmail.com";
        MailMailer::send('email',$request->all(), function($msj) use($subject,$for){
            $msj->from("Sarap120298@gmail.com","FemCoders");
            $msj->subject($subject);
            $msj->to($for);
        });
        return redirect()->back();
    }
}