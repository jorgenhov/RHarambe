<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
	protected $fillable = ['person_id','firstname','lastname','email','phonenumber','adress'];

    public function orders(){
    	return $this->hasMany('App\Order');
    }
}
