<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Cek_login
{


    public function handle(Request $request, Closure $next,...$role)
    {
        if(in_array($request->user()->role,$role)){
            return $next($request);
        }
        return redirect('/');
    }
}
