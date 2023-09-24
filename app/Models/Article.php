<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $guarded = ['id'];
    use HasFactory;
    
    const Masculino = 1;
    const Femenino = 2;

    public function getRouteKeyName(){
        return "slug";
    }

    public function donations(){
        return $this->belongsToMany(User::class, 'id', 'article_id', 'user_id');
    }

    public function category(){
        return $this->belongsToMany(Category::class, 'category_id');
    }

    public function cartItems(){
        return $this->hasMany(ItemCart::class, 'article_id');
    }

    public function users(){
        return $this->belongsToMany('App\Models\User');
    }

    //Relaci[on uno a muchos polimorfica
    public function resource(){
        return $this->morphOne('App\Models\Resource', 'resource');
    }

    //Relacion uno a muchos polimorfica
    public function comments(){
        return $this->morphMany('App\Models\Comment', 'commentable');
    }
    
    public function reactions(){
        return $this->morphMany('App\Models\Reaction', 'reactionale');
    }

    //Relacion uno  uno polimorfica
    public function image(){
        return $this->morphOne('App\Models\Image', 'imageable');
    }

}
