<?php

namespace App\Http\Controllers;

use App\Repositories\MiniGame\MiniGameRepository;
use Illuminate\Http\Request;

class MiniGamesController extends Controller
{
    private MiniGameRepository $repository;

    public function __construct() {

        $this->repository = new MiniGameRepository;
        // parent::__construct();

    }

    public function index()
    {
        $minigames = $this->repository->getAll();
        return view('admin.minigames.minigames')->with('minigame',$minigames); 
    }

    public function create()
    {
        return view('admin.minigames.create');
    }


    public function save(Request $request)
    {
        $this->repository->saveMiniGame($request);
        return $this->index();
    }

    public function edit(Request $request, $id)
    {
        $minigame=$this->repository->editMiniGame($request,$id);
        if(!$minigame){
            return view('minigame.notexist');
        }
        return view('admin.minigames.edit')->with('minigame',$minigame);
    }

    public function update(Request $request, $id)
    {
        $minigame = $this->repository->getAll();
        $this->repository->updateMiniGame($request,$id);
        return view('/admin/minigames/minigame')->with('minigame',$minigame);
    }

    public function destroy(Request $request)
    {
        $this->repository->destroyMiniGame($request);
        return redirect('/admin/minigames/minigames');
    }
}


