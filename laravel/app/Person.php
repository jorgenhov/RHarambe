<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = ['person_id','firstname','lastname','email','phonenumber','adress'];

    public function users(){
        return $this->hasOne('App\User','id','id');
    }
}
