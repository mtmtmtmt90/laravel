<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class MainController extends Controller
{
    public function index(Request $request){

        Log::channel('single')->info($request->ip());

        $products = Product::simplePaginate(6);
        return view('index', ['products' => $products]);
    }

    public function categories(){
        $categories = Category::get();
        return view('categories', ['categories' => $categories]);
    }

    

    public function product($product_code = null){
        $product = Product::where('code', $product_code)->first();
        return view('product', ['product' => $product]);
    }

    public function category($code = null){
        $category = Category::where('code', $code)->first();
        return view('category', ['category' => $category]);
    }

    public function sign_in(){
        return view('signIn');
    }

    public function sign_up(){
        return view('signUp');
    }
}
