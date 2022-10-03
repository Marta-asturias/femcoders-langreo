<?php

namespace App\Http\Controllers;
use App\Repositories\User\DeleteUserRepository;

use Illuminate\Http\Request;


    

class DeleteUserController 
{
private DeleteUserRepository $repository;

    public function __construct() {

        $this->repository = new DeleteUserRepository;
        // parent::__construct();

    }

    public function destroy(Request $request)
    {
        $this->repository->destroyUser($request);
        return redirect('/admin/users/users')->with('status_success', 'Eliminado Correctamente');
    }

}
