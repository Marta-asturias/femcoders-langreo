<?php

namespace App\Http\Controllers;

use App\Repositories\Workshop\WorkshopRepository;
use App\Repositories\WorkshopRepository\WorkshopRepository as WorkshopRepositoryWorkshopRepository;
use App\View\Components\pruebas;
use Illuminate\Http\Request;

class WorkshopController extends WorkshopRepository
{
    public function __construct() {
        parent::__construct();

    }

    public function index()
    {
        $workshops = $this->getAll();
        return view('admin.workshops')->with('workshop',$workshops); 
    }

    public function create()
    {
        return view('admin.create');
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
        $workshops = new Workshop();
        $workshops->title = $request->get('title');
        $workshops->details = $request->get('details');
        // $workshops->image = $url_file;
        $workshops->age = $request->get('age');
        $workshops->duration = $request->get('duration');
        $workshops->format = $request->get('format');
        $workshops->save();
        return redirect('admin/workshops');
    }

    public function edit(Request $request, $id)
    {
        $workshop=$this->editWorkshop($request,$id);
        if(!$workshop){
            return view('workshop.notexist');
        }
        return view('admin.edit')->with('workshop',$workshop);
    }

    public function update(Request $request, $id)
    {
        $workshop = $this->getAll();
        $this->updateWorkshop($request,$id);
        return view('/workshops')->with('workshop',$workshop);
    }

    public function destroy(Request $request)
    {
        $this->destroyWorkshop($request);
        return redirect('/admin/workshops');
    }
}
