<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    // List all users
    public function index()
    {

        $users = User::all();

        return view('pages.admindashboard.users', compact('users'));

    }

}
