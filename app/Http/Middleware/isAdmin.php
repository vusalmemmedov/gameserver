<?php

namespace App\Http\Middleware;

use Closure;

class isAdmin
{
    public function handle($request, Closure $next)
    {
        if(auth()->check() && auth()->user()->isAdmin()) {
            return $next($request);
        }else{
            return view('/');
        }
    }
}

