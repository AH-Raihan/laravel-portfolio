<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class deleteController extends Controller
{
    function deleteOne()
    {
        return  DB::table('studentsFactory')->where("name","=","Azizul Hasan Raihan55")->delete();

    }
    function deleteAllWithoutReset(){
        return  DB::table('studentsFactory')->delete();


    }
    function deleteAllWithReset(){
        return DB::table('studentsFactory')->truncate();


    }
}
