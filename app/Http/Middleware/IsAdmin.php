<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
       
        if(Auth::user() && Auth::user()->role == 'Admin'){
            return $next($request);
        }
        return redirect('/')->withErrors('message','Please Login !!');
    }
}
