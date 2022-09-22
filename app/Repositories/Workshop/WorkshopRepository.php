<?php

namespace App\Repositories\Workshop\Workshops;

use App\Models\Workshop;

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
}