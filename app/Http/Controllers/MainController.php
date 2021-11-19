<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        
        return view('index');
    }

    public function categories(){
        $categories = Category::get();
        return view('category', ['categories' => $categories]);
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

    public function category($code = 'products'){
        $category = Category::where('code', $code)->first();
        return view('index', ['category' => $category]);
    }
}
