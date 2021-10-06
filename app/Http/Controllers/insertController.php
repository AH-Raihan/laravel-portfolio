<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class insertController extends Controller
{
    function insert(){
        $result= DB::table('studentsFactory')->insert(
            [
                ["id"=>11,"name"=>"ahraihan","class"=>"one","roll"=>120],
                ["id"=>12,"name"=>"hello","class"=>3,"roll"=>200]
            ]
        );

        if ($result==true){
            return "insert success";
        }else{
            return "fail";
        }





    }function insertorignore(){
        $result= DB::table('studentsFactory')->insertOrIgnore(
            [
                ["id"=>11,"name"=>"ahraihan","class"=>"one","roll"=>120],
                ["id"=>12,"name"=>"hello","class"=>3,"roll"=>200]
            ]
        );

        if ($result==true){
            return "insert success";
        }else{
            return "fail";
        }
    }
}
