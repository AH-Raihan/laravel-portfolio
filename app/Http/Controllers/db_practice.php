<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class db_practice extends Controller
{
    function onSelect()
    {
        // $json = DB::select('select * from students where roll=?', [91]);
        $json = DB::select('select * from students');
        $jsonEncode = json_encode($json);
        $jsonDecode = json_decode($jsonEncode);

        return view('dbSelect', ['datas' => $jsonDecode]);
    }

    function onInsert(Request $req)
    {
        $name = $req->input('name');
        $class = $req->input('class');
        $roll = $req->input('roll');

        $result = DB::insert('INSERT INTO `students` (`name`,`class`,`roll`) VALUE(?,?,?)', [$name, $class, $roll]);

        if ($result == true) {
            return "success";
        } else {
            return "fail";
        }
    }
    function onDelete()
    {
    }
    function onUpdate()
    {
    }
}
