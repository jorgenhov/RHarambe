<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $fillable = ['table_id','number','description','capacity'];

    public function orders(){
        return $this->hasMany('App\Order','id','id');
    }
}
