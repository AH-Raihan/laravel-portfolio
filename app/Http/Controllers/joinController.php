<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class joinController extends Controller
{
    function leftJoin(){
        $result= DB::table('studentsFactory')
        ->leftJoin('exam_marks','exam_marks.name','=','studentsFactory.name')
        ->get();
        return $result;
    }
    function rightJoin(){
        $result= DB::table('studentsFactory')
        ->rightJoin('exam_marks','studentsFactory.id','=','exam_marks.id')
        ->get();
        return $result;
    }
}
