<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class selectController extends Controller
{
    function UniqeSelect(){
        $result = DB::table('studentsFactory')->distinct()->get();
        return $result;
    }

    function singleColumnSelect(){
        $result = DB::table('studentsFactory')->select('name')->get();
        return $result;
    }
    function multiColumnSelect(){
        $result = DB::table('studentsFactory')->select('id','name')->get();
        return $result;
    }
}
