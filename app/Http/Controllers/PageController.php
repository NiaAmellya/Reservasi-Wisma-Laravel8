<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

class PageController extends Controller
{
    // About Us
    function adminHome()
    {
        return view('dashboard');
    }
}
