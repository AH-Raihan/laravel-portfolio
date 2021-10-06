<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class updateController extends Controller
{
    function onupdate(){
        $result= DB::table('studentsFactory')
        ->where('name',"=","ahr")
        ->update(['name'=>'AHRaihan','roll'=>'2l8','class'=>'ten']) ;

        if ($result==true){
            return "update success";
        }else{
            return "update fail ";
        }
    }
}
