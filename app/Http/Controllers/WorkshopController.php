<?php

namespace App\Http\Controllers;

use App\Repositories\Workshop\WorkshopRepository;
use Illuminate\Http\Request;

class WorkshopController
{
    private WorkshopRepository $repository;

    public function __construct() {

        $this->repository = new WorkshopRepository;
        // parent::__construct();

    }

    public function index()
    {
        $workshops = $this->repository->getAll();
        return view('admin.workshops.workshops')->with('workshop',$workshops); 
    }

    public function create()
    {
        return view('admin.workshops.create');
    }


    public function save(Request $request)
    {
        $this->repository->saveWorkshop($request);
        return $this->index();
    }

    public function edit(Request $request, $id)
    {
        $workshop=$this->repository->editWorkshop($request,$id);
        if(!$workshop){
            return view('workshop.notexist');
        }
        return view('admin.workshops.edit')->with('workshop',$workshop);
    }

    public function update(Request $request, $id)
    {
        $workshop = $this->repository->getAll();
        $this->repository->updateWorkshop($request,$id);
        return view('/workshops')->with('workshop',$workshop);
    }

    public function destroy(Request $request)
    {
        $this->repository->destroyWorkshop($request);
        return redirect('/admin/workshops/workshops');
    }
}
