<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CekAuthUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        if (Auth::check() && Auth::user()->role == 'admin') {
      return $next($request);
    }
    
return redirect()->route('login')->with('error',"You don't have an access");

    }
}
