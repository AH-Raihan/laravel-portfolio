<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class retriveController extends Controller
{
    function selectAllRows(){
        $result = DB::table('studentsFactory')->get();
        return $result;
    }

    function selectOneRows(){
        $result = DB::table('studentsFactory')->where('name','=','Tanvir')->first();
        return json_encode($result);
    }

    function findRows(){
        $result = DB::table('studentsFactory')->find('1');
        return json_encode($result);
    }

    function selectOneColumn(){
        $result = DB::table('studentsFactory')->pluck('name');
        return json_encode($result);
    }

    function selectMultiColumn(){
        $result = DB::table('studentsFactory')->pluck('name','id');
        return json_encode($result);
    }

    function speceficData(){
        $result = DB::table('studentsFactory')->where('id','=','1')->value('name');
        return json_encode($result);
    }
}
