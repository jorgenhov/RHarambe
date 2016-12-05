<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['order_id','time','date','ref_person_id','ref_cart_id','ref_table_id'];

    public function carts(){
        return $this->hasOne('App\ShoppingCart');
    }

    public function foods(){
        return $this->hasMany('App\Food');
    }

    public function drinks(){
        return $this->hasMany('App\Drink');
    }

    public function tables(){
        return $this->hasOne('App\Table','id','id');
    }

    public function persons(){
        return $this->hasOne('App\Person');
    }
}
