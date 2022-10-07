<?php

namespace App\Http\Controllers;
use App\Repositories\User\DeleteUserRepository;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;



    

class DeleteUserController 
{
private DeleteUserRepository $repository;

    public function __construct() {

        $this->repository = new DeleteUserRepository;
        // parent::__construct();

    }

    public function destroy(Request $request)
    {
        // alert()->flash('Are you sure?', 'warning',[
        //     'text' => 'You won\'t be able to revert this!',
        //     'showCancelButton' => true,
        //     'confirmButtonColor' => '#3085d6',
        //     'cancelButtonColor' => '#d33',
        //     'confirmButtonText' => 'Yes, delete it!',
        //     // if user clicked Yes, delete it!
        //     // then this will run
        //     'deleted' => 'Deleted!',
        //     'msg' => 'Your file has been deleted.',
        //     'type' => 'success'
        // ]);

        $this->repository->destroyUser($request);
        return redirect('/admin/users/users');
    }

    public function delete(Request $request)
{
    $this->repository->destroyUser($request);
    return view('admin.users.delete');
}

}
