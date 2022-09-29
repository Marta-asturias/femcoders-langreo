<?php

namespace App\Http\Controllers;

use App\Repositories\User\ShowUserRepository;
use Illuminate\Http\Request;

class ShowUserController 
{
    private ShowUserRepository $repository;

    public function __construct() {

        $this->repository = new ShowUserRepository;
        // parent::__construct();

    }

    public function index()
    {
        $users = $this->repository->getAll();
        return view('admin.users.users')->with('user',$users); 
    }

}
