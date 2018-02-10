<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Authentication
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Game types page
    public function game()
    {
        return view('pages.game');
    }

    //Play game page
    public function play()
    {
        return view('pages.play');

        // $images = Image::all();
        // return view('pages.play')->with('images', $images);
    }
}