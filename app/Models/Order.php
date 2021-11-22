<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
