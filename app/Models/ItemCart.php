<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemCart extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    public function article(){
        return $this->belongsTo(Article::class, 'article_id');
    }

    public function cart(){
        return $this->belongsTo(Cart::class, 'cart_id');
    }
}
