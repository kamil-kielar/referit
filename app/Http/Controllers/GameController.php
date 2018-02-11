<?php

namespace App\Http\Controllers;

use App\Game;
use App\User;
use Illuminate\Http\Request;

class GameController extends Controller
{

    public function save(Request $request)
    {

       Game::create($request->all());

    }

}
