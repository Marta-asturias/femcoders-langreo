<?php

namespace App\Http\Controllers;

use App\Exports\ParticipantsExport;
use App\Mail\tryEmail;
use App\Repositories\Participant\ParticipantRepository;
use App\Repositories\Workshop\WorkshopRepository;
use Illuminate\Http\Request;
/* use Illuminate\Support\Facades\Mail; */
use Maatwebsite\Excel\Facades\Excel;
use App\Mail\EmailReceived;
use App\Models\Participant;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;

/* use Illuminate\Support\Facades\Mail; */


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
        return view('admin.participants.participants')->with([
            'participant' => $participant,
            'workshop' => $workshop
        ]);
    //     return view('admin.participants.participants')->with('participant',$participant);
    }

    public function export() 
{
   return Excel::download(new ParticipantsExport , 'participants.xlsx');
}
    


 // 'workshop' => $workshop
    public function createParticipant(Request $request, $id)
    {
        $workshop = $this->workshopRepository->getWorkshop($id);
        if (!$workshop) {
            return view('workshop.notexist');
        }
        return view('participant')->with('workshop', $workshop);
    }

/*     public function subscribe(Request $request ) 
    {
       $data=[
        
        'email'=>$request->email,
        'message'=>$request->message
       ];
       Mail::to('receiver@gmail.com')->send(new EmailReceived($data));
       return 'gracias por inscribirte';
} */

    public function save(Request $request, $id)

   
    {

        $to= [
            [
                'email' =>$request->email,
                'first_name' => $request->first_name,
                'last_name'=>$request->last_name,
            ]
        ];
        $data=[
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'date'=>$request->date,
           
           ];
   
      

             
        if (isset($_POST['sendForm'])) {
            if (isset($_POST['legals']) && $_POST['legals'] == '1'){
                echo '<div class="alert alert-success">Has aceptado correctamente las condiciones de uso.</div>';
            }
            $participant = $this->repository->getByemail($request);
            $to = ['email'=>$request->email];
            
            if(!empty($participant)){
                $participant->workshops()->attach($id);
            }else{
             
                   
                $this->repository->saveParticipant($request, $id);                   
            }
            Mail::to($to)->send(new EmailReceived($data));
        }
       
        // return 'gracias por inscribirte';

        return redirect(route('getWorkshops'),302);
    }


}
