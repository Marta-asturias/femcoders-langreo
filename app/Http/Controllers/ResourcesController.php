<?php

namespace App\Http\Controllers;

use App\Repositories\Resource\ResourceRepository;
use Illuminate\Http\Request;

class ResourcesController extends Controller
{
    private ResourceRepository $repository;

    public function __construct() {

        $this->repository = new ResourceRepository;
        // parent::__construct();

    }

    public function index()
    {
        $resources = $this->repository->getAll();
        return view('admin.resources.resources')->with('resource',$resources); 
    }

    public function create()
    {
        return view('admin.resources.create');
    }


    public function save(Request $request)
    {
        $this->repository->saveResource($request);
        return $this->index();
    }

    public function edit(Request $request, $id)
    {
        $resource=$this->repository->editResource($request,$id);
        if(!$resource){
            return view('resource.notexist');
        }
        return view('admin.resources.edit')->with('resource',$resource);
    }

    public function update(Request $request, $id)
    {
        $resource = $this->repository->getAll();
        $this->repository->updateResource($request,$id);
        return view('/resources')->with('resource',$resource);
    }

    public function destroy(Request $request)
    {
        $this->repository->destroyresource($request);
        return redirect('/admin/resources/resources');
    }
}

