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
        $order = Order::findOrFail($orderId); 
        return view('basket', ['order' => $order]);
    }

    public function ordering(){
        $orderId = session::get('orderId');
        $order = Order::findOrFail($orderId); 
        return view('order', ['order' => $order]);
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
        
        
        session::flash('success', $order->products()->where('product_id', $productID)->first()->name .' added to basket');
        return redirect()->back();

    }

    public function basketRmv($productID){
        $orderId = session::get('orderId');
        $order = Order::find($orderId);
        if ($order->products->contains($productID)){
            $pivotRow = $order->products()->where('product_id', $productID)->first()->pivot;
            session::flash('warning', $order->products()->where('product_id', $productID)->first()->name .' removed from basket!');
            if ($pivotRow->count === 1) {
                $order->products()->detach($productID);
            } else {
                $pivotRow->count--;
                $pivotRow->update();
            }
        } else {
            session::forget('orderId');
        }
        return redirect()->back();
    }

    public function confirm(Request $request){
        $orderId = session::get('orderId');
        $order = Order::find($orderId); 
        $result = $order->saveResult($request->name, $request->number);
        if ($result) { session::flash('success', 'Order has been accepted for processing!'); } else { session::flash('warning', 'Order accept error!'); }
        return redirect()->route('index');
    }
}
