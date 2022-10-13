<?php

namespace App\Http\Controllers;

use App\Models\Workshop;
use Illuminate\Http\Request;

class DateController extends Controller
{
    public function getdates()
    {
        
        $workshops = Workshop::all()->sortByDesc("id");
        return view('participant')->with('workshop',$workshops);
    }
}
