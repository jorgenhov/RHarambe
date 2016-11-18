<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function carts(){
    	return $this->hasOne('App\Cart');
    }

    public function tables(){
    	return $this->hasOne('App\Table');
    }

    public function persons(){
    	rerturn $this->hasOne('App\Person');
    }
}
