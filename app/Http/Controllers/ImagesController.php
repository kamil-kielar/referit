<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;

class ImagesController extends Controller
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

    public function store(Request $request)
    {




    }

    public function destroy($id)
    {
        $image = Image::findOrFail($id);

        $image->delete();

        return redirect()->back();

    }
}
