<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('index');
    }

    public function categories(){
        return view('category');
    }

    public function category($category){
        dd($category);
    }

    public function basket(){
        return view('basket');
    }

    public function ordering(){
        return view('order');
    }

    public function product($product_code = null){
        return view('product', ['product' => $product_code]);
    }
}
