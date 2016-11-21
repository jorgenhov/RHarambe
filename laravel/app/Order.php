<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['orderID','time','date','ref_personID','ref_cartID','ref_tableID'];

    public function tables(){
        return $this->hasOne('App\Table','tableID','ref_tableID');

    }
}