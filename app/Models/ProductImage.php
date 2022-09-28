<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;
    protected $table = 'product_image_status';
    public $fillable = ['product_id'];
    public $timestamp = false;
    public function productimage(){
        return $this->belongsTo(ProductImage::class,'product_id');
    }
}
