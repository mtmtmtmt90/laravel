<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class Order extends Model
{
    use HasFactory;
    public function products(){
        return $this->belongsToMany(Product::class)->withPivot('count')->withTimestamps();
    }

    public function totalCost(){
        $sum = 0;
        foreach($this->products as $product) {
            $sum += $product->getCost();
        }
        return $sum;
    }

    public function saveResult($name, $number){
        if ($this->status) {
            return false;
        } else {
            $this->name = $name;
            $this->phone = $number;
            $this->status = 1;
            $this->save(); 
            session::forget('orderId');
            return true;
        }
    }

    
}
