<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $guarded = ['id', 'status'];
    
    use HasFactory;
    const Delivery = 1;
    const Entrega = 2;

    const Pendiente = 0;
    const Confirmado = 1;
    const Cancelado = 2;

    //Relacion uno a muchos inversa
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    //Relacion muchos a muchos
    public function cartItems(){
        return $this->hasMany(ItemCart::class, 'cart_id');
    }


}
