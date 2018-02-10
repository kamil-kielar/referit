<?php

namespace App\Http\Controllers;

use App\Game;
use App\Image;
use App\User;
use Illuminate\Http\Request;

class ManageGameController extends Controller
{

    // List all games
    public function index()
    {

        $images = Image::all();

        return view('pages.admindashboard.games', compact('images'));

    }

    public function create()
    {

        return view('pages.admindashboard.gameCreate');

    }

    public function destroy($id)
    {
        $image = Image::findOrFail($id);

        $image->delete();

        return redirect()->back();

    }

}
