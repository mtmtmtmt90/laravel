<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;
use App\Models\Order;

class basketIsEmpty
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
        $orderId = session::get('orderId');
        if (!Order::find($orderId)->products()->exists())  
        { 
            session::flash('warning', 'Basket is empty. Please add something to basket!');
            return redirect()->route('index'); 
        }
        return $next($request);
    }
}
