<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    protected $fillable = ['imagePath','name','price'];

    public function orders(){
        return $this->hasMany('App\Order');
    }
}
