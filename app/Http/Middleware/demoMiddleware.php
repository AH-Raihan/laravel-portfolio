<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class demoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $token=$request->token;

        if ($token>18){

            return $next($request);
        }else{
            return  response("user Bloked");
        }
    }
}
