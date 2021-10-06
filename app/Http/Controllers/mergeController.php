<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mergeController extends Controller
{
    function mergeData(){
        $students=DB::table('studentsFactory')->get();
        $examMarks=DB::table('exam_marks')->get();

        $total= $students->merge($examMarks);
        return $total;
    }
}
