<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    public function personOrders(){
    	return $this->hasMany('App\PersonOrder');
    }
}
