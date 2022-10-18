<?php

namespace App\Repositories\User;

use App\Http\Controllers\User as ControllersUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class UpdateUserRepository  {

private User $User;

    public function __construct() {
    $this->User= new User(); 
    }

    public function getAll(){
        return $this->User->all()->sortByDesc("id");
        }

    public function findUser(Request $request, $id){
        return User::find($id);
    }

    public function updateUser(Request $request, $id)
    {
        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'password'=> 'required',  
        ]);

        $this->User = User::find($id);
        $this->User->name = $request->get('name');
        $this->User->email = $request->get('email');
        $this->User->password = $request->get('password');
        Alert::success('Actualizado', 'Este administrador ha sido actualizado con éxito');
        return $this->User->save(); 
    }



}