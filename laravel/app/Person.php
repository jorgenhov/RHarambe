<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = ['personID','firstname','lastname','email','phonenumber','adress'];
}