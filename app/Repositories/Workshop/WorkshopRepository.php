<?php

namespace App\Repositories\Workshop;
use App\Http\Controllers\Controller;
use App\Models\Workshop;
use Illuminate\Http\Request;


class WorkshopRepository extends Controller {
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
            // 'file' => 'required|mimes:jpg,png|max:2048',
            'title'=> 'required', 
            'details' => 'required',
            'age'  => 'required',
            'duration'  => 'required',
            'format'  => 'required'
        ]);
/*         $fileName = time().'.'.$request->file->extension();
        $request->file->move(public_path('storage'), $fileName); */
        // $url_file = Storage::url($fileName);
        $this->workshop->title = $request->get('title');
        $this->workshop->details = $request->get('details');
        // $workshops->image = $url_file;
        $this->workshop->age = $request->get('age');
        $this->workshop->duration = $request->get('duration');
        $this->workshop->format = $request->get('format');
        return $this->workshop->save();    
    }

}