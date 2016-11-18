<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonOrder extends Model
{
    public function foods(){
    	return $this->hasOne('App\Food');
    }

    public function drinks(){
    	return $this->hasOne('App\Drink');
    }
}
