<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statusdetail extends Model
{
    use HasFactory;
    protected $table = 'status_detail';
    public $fillable = ['name'];
    public $timestamp = false;
    use HasFactory;
}
