<?php

namespace App\Http\Controllers;

use App\Models\MiniGame;


class UserMiniGamesController extends Controller
{
    public function getMiniGames()
    {
        $minigames = MiniGame::all()->sortByDesc("id");
        return view('minigames')->with('minigame',$minigames);
    }
}
