<?php

namespace App\Repositories\Workshop\Workshops;

use App\Models\Workshop;
use Illuminate\Http\Client\Request;

/* use Illuminate\Http\Request; */

class WorkshopRepository {
 /*    private $model; */
 private Workshop $workshop;


    public function __construct() {
     $this->workshop= new Workshop(); 
    
    }
    public function getAll(){
/*         $workshops = $this->model->all();
        return $workshops; */
       return $this->workshop->all()->sortByDesc("id");
        
      /*   return view('admin.workshops')->with('workshop', $this->workshops); */
    }
    public function save(Request $request)
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
        $this->workshops->title = $request->get('title');
        $this->workshops->details = $request->get('details');
        // $workshops->image = $url_file;
        $this->workshops->age = $request->get('age');
        $this->workshops->duration = $request->get('duration');
        $this->workshops->format = $request->get('format');
        $this->workshops->save();
        return $this->workshops->save();
        return redirect('/workshop'); 
    }

}