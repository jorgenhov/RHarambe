<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $fillable = ['tableID','number','description','capacity'];

       public function orders(){
           return $this->hasMany('App\Order','ref_tableID','tableID');
       }
}