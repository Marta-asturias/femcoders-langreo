<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserMiniGamesController extends Controller
{
    public function index () {
        return view('minigames');
       }
}
