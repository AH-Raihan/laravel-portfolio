<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class aggregatesController extends Controller
{
    function count(){
        $result = DB::table('studentsFactory')->count();
        return $result;
    }
    function max(){
        $result = DB::table('studentsFactory')->max('id');
        return $result;
    }
    function min(){
        $result = DB::table('studentsFactory')->min('id');
        return $result;
    }
    function avg(){
        $result = DB::table('studentsFactory')->avg('roll');
        return $result;
    }
}
