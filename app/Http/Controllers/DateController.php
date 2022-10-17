<?php

namespace App\Http\Controllers;

use App\Models\Workshop;
use Illuminate\Http\Client\Request;

class DateController extends Controller
{
    public function getdates(Request $request)
    {
        
        $workshops = Workshop::all()->sortByDesc("id");
        return view('participant')->with('workshop',$workshops);
    }
}
