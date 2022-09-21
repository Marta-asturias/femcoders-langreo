<?php

namespace App\Http\Controllers;

use App\Models\Workshop;
use Illuminate\Http\Request;

class UserWorkshopsController extends Controller
{
    public function getWorkshops()
    {
        $workshops = Workshop::all()->sortByDesc("id");
        return view('workshops')->with('workshop',$workshops);
    }
}
