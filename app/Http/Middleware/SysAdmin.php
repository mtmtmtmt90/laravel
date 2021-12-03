<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SysAdmin
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
        if (Auth::check()) 
        {
            if (Auth::user()->email == 'go.suits.3@gmail.com') {
                return $next($request);
            }
        }
        return redirect()->route('index')->send();
    }
}
