<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cartdetail extends Model
{
    use HasFactory;
    protected $table = 'cart_detail';
    public $fillable = ['cart_id','product_id','name_product'];
    public $timestamp = false;
    public function category(){
        return $this->belongsTo(Category::class,'cate_id');
    }
    public function product(){
        return $this->belongsTo(Product::class,'product_id');
    }
}
