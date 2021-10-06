<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CookieSessionController extends Controller
{
    function setCookie(){
        Cookie::queue('cookieName','Hello Raihan','1');
    }
    function getCookie(){
        return Cookie::get('cookieName');
    }
    function deleteCookie(){
        Cookie::queue(Cookie::forget('cookieName'));
    }






    function sessionSet(Request $request){
        $request->session()->put('sessionName','Azizul Hasan Raihan');
    }
    function sessionGet(Request $request){
        return $request->session()->get('sessionName');
    }
    function sessionDelete(Request $request){
         $request->session()->forget('sessionName');
    }
    function sessionResetAll(Request $request){
         $request->session()->flush();
    }
}
