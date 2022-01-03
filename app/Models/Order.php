<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderConfirm;

class Order extends Model
{
    use HasFactory;
    // use SoftDeletes;
    public function products(){
        return $this->belongsToMany(Product::class)->withTrashed()->withPivot('count')->withTimestamps();
    }

    public function totalCost(){
        $sum = 0;
        foreach($this->products as $product) {
            $sum += $product->getCost();
        }
        return $sum;
    }

    public function saveResult($name, $number, $email){
        if ($this->status) {
            return false;
        } else {
            $this->name = $name;
            $this->phone = $number;
            Mail::to($email)->send(new OrderConfirm());
            $this->status = 1;
            $this->user_id = (isset(Auth::user()->id) ?? 0);
            $this->save(); 
            session::forget('orderId');
            return true;
        }
    }

    
}
