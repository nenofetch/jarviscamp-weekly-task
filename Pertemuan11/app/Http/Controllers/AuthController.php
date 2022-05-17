<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function register()
    {
        return view("register");
    }

    function welcome(Request $request)
    {
        return view('welcome', [
            'firstname' => $request->firstname,
            'lastname' => $request->lastname
        ]);
    }
}
