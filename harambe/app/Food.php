<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    public function personOrders(){
    	return $this->hasMany('App\PersonOrder');
    }
}
