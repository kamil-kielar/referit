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

        $images = Image::all();

        return view('pages.play', compact('images'));

    }

    //Play game page
    public function dashboard()
    {
        return view('pages.admindashboard.dashboard');
    }
}