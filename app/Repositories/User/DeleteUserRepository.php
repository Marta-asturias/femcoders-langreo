<?php

namespace App\Repositories\User;

use App\Http\Controllers\User as ControllersUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class DeleteUserRepository  {

  private User $User;

    public function __construct() {
    $this->User= new User();
    }



  public function destroyUser(Request $request)
    {
        $this->User = User::find($request->id);  
        Alert::warning('Eliminado', 'El administrador Ha sido Borrado');     
        return $this->User->delete();
    
    }
  }
