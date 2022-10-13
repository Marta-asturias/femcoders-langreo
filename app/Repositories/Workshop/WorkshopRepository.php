<?php

namespace App\Repositories\Workshop;

use App\Models\Workshop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WorkshopRepository  {
private Workshop $workshop;

    public function __construct() {
    $this->workshop= new Workshop(); 
    }

    public function getAll(){
    return $this->workshop->all()->sortByDesc("id");
    }

    public function saveWorkshop(Request $request)
    {  
        $request->validate([     
            'file' => 'required|mimes:jpg,png|max:2048',
            'title'=> 'required', 
            'details' => 'required',
            'age'  => 'required',
            'duration'  => 'required',
            'format'  => 'required',
            'date1' => 'required',

        ]);
        $fileName = time().'.'.$request->file->extension();
        $request->file->move(public_path('storage'), $fileName);
        $url_file = Storage::url($fileName);
        $this->workshop->title = $request->get('title');
        $this->workshop->details = $request->get('details');
        $this->workshop->image = $url_file;
        $this->workshop->age = $request->get('age');
        $this->workshop->duration = $request->get('duration');
        $this->workshop->format = $request->get('format');
        $this->workshop->date1= $request->get('date1');
        $this->workshop->date2= $request->get('date2');
        $this->workshop->date3= $request->get('date3');
        $this->workshop->date4= $request->get('date4');
        return $this->workshop->save();    
    }

    public function editWorkshop(Request $request, $id){
        return $this->getWorkshop($id);
    }

    public function getWorkshop($id){
        return Workshop::find($id);
    }

    public function updateWorkshop(Request $request, $id)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,png|max:2048',
            'title'=> 'required',
            'details' => 'required',
            'age'  => 'required',
            'duration'  => 'required',
            'format'  => 'required',
            'date1' => 'required',

        ]);

        $fileName = time().'.'.$request->file->extension();
        $request->file->move(public_path('storage'), $fileName);
        $url_file = Storage::url($fileName);
        $this->workshop = Workshop::find($id);
        $this->workshop->title = $request->get('title');
        $this->workshop->details = $request->get('details');
        $this->workshop->image = $url_file;
        $this->workshop->age = $request->get('age');
        $this->workshop->duration = $request->get('duration');
        $this->workshop->format = $request->get('format');
        $this->workshop->date1= $request->get('date1');
        $this->workshop->date2= $request->get('date2');
        $this->workshop->date3= $request->get('date3');
        $this->workshop->date4= $request->get('date4');
        return $this->workshop->save(); 
    }

    public function destroyWorkshop(Request $request)
    {
        $workshop = workshop::find($request->id);        
        return $workshop->delete();
    
    }

}