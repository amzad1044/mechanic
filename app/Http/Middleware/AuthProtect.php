<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Session;

class AuthProtect
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //return $next($request);
        if(Auth::check())
        {
            return $next($request);
        }
        else
        {
            Session::flash('warning','Sorry you cannot access');
            return redirect('login');
        }
    }
}
