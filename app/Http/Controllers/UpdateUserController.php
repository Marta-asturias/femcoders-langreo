<?php

namespace App\Http\Controllers;

use App\Repositories\User\UpdateUserRepository;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class UpdateUSerController extends Controller
{
    private UpdateUserRepository $repository;

    public function __construct() {

        $this->repository = new UpdateUserRepository;
        // parent::__construct();

    }

    public function edit(Request $request, $id)
    {
        $user=$this->repository->findUser($request,$id);
        if(!$user){
            return view('user.notexist');
        }
        return view('admin.users.edit')->with('user',$user);
    }

    public function update(Request $request, $id)
    {
        $user = $this->repository->getAll();
        $this->repository->updateUser($request,$id);
        //return view('/users')->with('user',$user);
        Alert::toast('Admin Actualizado', 'success');

        return redirect()->route('users');
    }

}
