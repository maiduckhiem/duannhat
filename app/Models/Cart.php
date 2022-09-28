<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Cart extends Model
{
    use HasFactory;
    protected $table = 'cart';
    public $fillable = ['count','total_price','name','status','address','ma_sp','phone_number','name_product'];
    public $timestamp = false;
    public function category(){
        return $this->belongsTo(Category::class,'cate_id');
    }
    public function product(){
        return $this->belongsTo(Product::class,'product_id');
    }
    public function username(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function cartdetail(){
        return $this->belongsTo(Cartdetail::class,'ma_sp','cart_id');
    }
    public function statusdetail(){
        return $this->belongsTo(Statusdetail::class,'status');
    }
}
