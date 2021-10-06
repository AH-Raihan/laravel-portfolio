<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class httpClient extends Controller
{

    function http1(){

        $response=http::get('http://apishooter.com/getSimpleString');
        return $response->header('Server');
    }
}
