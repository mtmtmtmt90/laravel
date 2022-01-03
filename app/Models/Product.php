<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['category_id', 'name', 'code', 'description', 'image', 'price', 'new'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function getCost(){
        return $this->pivot->count * $this->price;
    }
}
