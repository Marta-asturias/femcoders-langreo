<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiniGamesController extends Controller
{
   public function index () {
    return view('admin.minigames');
   }
}
