<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use App\Models\Workshop;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome(Request $request){
        $workshop=Workshop::take(4)->orderBy('id', 'desc')->get();
        $resource=Resource::take(4)->orderBy('id', 'desc')->get();
        return view('/welcome')->with('workshop', $workshop)->with('resource', $resource);
    }
}
