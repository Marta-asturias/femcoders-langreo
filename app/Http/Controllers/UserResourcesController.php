<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserResourcesController extends Controller
{
    public function index () {
        return view('resources');
       }
}
