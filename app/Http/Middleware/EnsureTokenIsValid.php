<?php

namespace App\Http\Middleware;

//use Closure;
use Illuminate\Http\Request;

class EnsureTokenIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request /*Closure $next*/)
    {
        if ($request->input('pass') == 'admin') {return redirect()->route('ex', ['name' => $request->input('name')]);} 
            else {return redirect()->route('login');}
        
    }
}
