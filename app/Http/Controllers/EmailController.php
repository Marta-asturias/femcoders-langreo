<?php

namespace App\Http\Controllers;

use App\Mail\EmailReceived;
use App\Models\Participant;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class EmailController extends Controller
{
    public function subscribe(Request $request ) 
    {
       $to= [
            [
                'email' =>$request->email,
                'name' => $request->name,
            ]
        ];
        $data=[
            'name'=>$request->name,
            'email'=>$request->email,
            'message'=>$request->message
           ];
   
       Mail::to($to)->send(new EmailReceived($data));
       return 'gracias por inscribirte';
       
}
}

