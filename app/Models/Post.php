<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    public $fillable = ['tieu_de','content1','content2','author','email','phone_number','listpostid'];
    public $timestamp = false;
    public function listpost(){
        return $this->belongsTo(Listpost::class,'listpostid');
    }
}
