<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    protected $fillable = ['cart_id','content'];

    public function orders(){
        return $this->hasOne('App\Order');
    }
}
