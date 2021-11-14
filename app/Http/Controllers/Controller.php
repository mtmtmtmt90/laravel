<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function php($name = ""){
        return redirect()->route('ex',['name'=>$name]);
    }

    public function example($name = ""){
        return view('example', ['name'=>$name]);
    }

    public function fallback(){
        return view('fallback');
    }
}
