<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = ['food_id','imagePath','name','description','price'];

    public function orders(){
        return $this->hasMany('App\Order','id','id');
    }
}
