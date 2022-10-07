<?php

namespace App\Http\Controllers;

use App\Models\Workshop;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome(Request $request){
        $workshop=Workshop::all()->sortByDesc("id");
        //dd($workshop);
        return view('/welcome')->with('workshop', $workshop);
    }
}
