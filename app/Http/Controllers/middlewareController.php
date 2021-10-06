<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class middlewareController extends Controller
{
    function __construct()
    {
        $this->middleware('demo');
    }

    function middlewareCon(){
        return view('Home');
    }
}
