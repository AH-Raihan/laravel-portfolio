<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class db_practice extends Controller
{


    function onSelect()
    {
        // $json = DB::select('select * from students where roll=?', [91]);
        $jsonData = DB::select('select * from students');
        $jsonString = json_encode($jsonData);
        $selectData = json_decode($jsonString);

        return view('dbSelect', ['data' => $selectData]);
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


    function onDelete(Request $req)
    {
        $id = $req->input('id');

        $result = DB::delete('DELETE FROM `students` WHERE `id`=?', [$id]);
        if ($result == true) {
            return "Successfully Deleted";
        } else {
            return "Fail to Delete";
        }
    }


    function onUpdate(Request $req)
    {
        $id = $req->input('id');
        $name = $req->input('name');
        $class = $req->input('class');
        $roll = $req->input('roll');

        $result = DB::update('UPDATE `students` SET `name`=? , `class`=? ,`roll`=? WHERE `id`=?', [$name, $class, $roll, $id]);

        if ($result == true) {
            return "Successfully Updated";
        } else {
            return "Fail to Update";
        }
    }
}
