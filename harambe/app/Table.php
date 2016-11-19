<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
	protected $fillable = ['table_id','name','capacity','description'];

    public function orders(){
    	return $this->hasMany('App\Order');
    }
}
