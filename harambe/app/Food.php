<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
	protected $fillable = ['food_id','name','imagePath','price','description'];
	
    public function personOrders(){
    	return $this->hasMany('App\PersonOrder');
    }
}
