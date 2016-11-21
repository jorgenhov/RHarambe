<?php

namespace App\Http\Controllers;

use App\Order;
use App\Person;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getForms(){
        return view('admin.forms');
    }

    public function getTables(){
        $persons = Person::all();
        $users = User::all();
        $orders = Order::all();
        return view('admin.tables',[
            'persons' => $persons,
            'users' => $users,
            'orders' => $orders
        ]);
    }

    public function getIndex(){
        $persons = Person::all();
        $users = User::all();
        $orders = Order::all();

        return view('admin.index',[
            'persons' => $persons,
            'users' => $users,
            'orders' => $orders
        ]);
    }

}
