<?php

namespace App\Repositories\User;

use App\Http\Controllers\User as ControllersUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ShowUserRepository {

private User $User;

    public function __construct() {
    $this->User= new User(); 
    }

    public function getAll(){
    return $this->User->all()->sortByDesc("id");
    }
}