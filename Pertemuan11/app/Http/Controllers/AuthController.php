<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function register()
    {
        return view("register");
    }

    function welcome($firstname, $lastname = 'testing')
    {
        return $firstname . " " . $lastname;
    }
}
