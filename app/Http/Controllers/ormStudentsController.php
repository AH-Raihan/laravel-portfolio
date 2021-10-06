<?php

namespace App\Http\Controllers;

use App\Models\examMarksModel;
use Illuminate\Http\Request;
use App\Models\studentsModel;

class ormStudentsController extends Controller
{
    function allSelect(){
        $result=studentsModel::leftJoin('exam_marks','exam_marks.roll','=','studentsFactory.roll');
        return $result;
    }
}
