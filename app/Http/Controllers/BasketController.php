<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Models\Order;


class BasketController extends Controller
{
    //


    public function basket(){
        $orderId = session::get('orderId');
        if (!is_null($orderId)) { $order = Order::findOrFail($orderId); }
        return view('basket', ['order' => $order]);
    }

    public function ordering(){
        return view('order');
    }

    public function basketAdd($productID){
        $orderId = session::get('orderId');
        if (is_null($orderId)) {
            $order = Order::create();
            session::put('orderId' , $order->id);
        } else {
            $order = Order::find($orderId);
        }
        
        if ($order->products->contains($productID)){
            $pivotRow = $order->products()->where('product_id', $productID)->first()->pivot;
            $pivotRow->count++;
            $pivotRow->update();
        }  else {
            $order->products()->attach($productID);
        }

        return redirect()->route('basket');

    }

    public function basketRmv($productID){
        $orderId = session::get('orderId');
        if (is_null($orderId)) {
            return view('basket');
        }
        $order = Order::find($orderId);

        if ($order->products->contains($productID)){
            $pivotRow = $order->products()->where('product_id', $productID)->first()->pivot;
            if ($pivotRow->count < 2) {
                $order->products()->detach($productID);
            } else {
                $pivotRow->count--;
                $pivotRow->update();
            }
        } 
        

        return redirect()->route('basket');
    }
}
