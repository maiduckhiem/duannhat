<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slideshow extends Model
{
    use HasFactory;
    protected $table = 'slideshow';
    public $fillable = ['link_lk'];
    public $timestamp = false;
}
