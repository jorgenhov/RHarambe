<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\Order;
use App\User;

class AdminController extends Controller
{
    public function showIndex(){
        $persons = Person::all();
        $users = User::all();
        $orders = Order::all();
        return view('admin.index',[
            'persons' => $persons,
            'users' => $users,
            'orders' => $orders
        ]);
    }

    public function showForms(){
    	return view('admin.forms');
    }

    public function showTables(){
        $persons = Person::all();
        $users = User::all();
        $orders = Order::all();
        return view('admin.tables',[
            'persons' => $persons,
            'users' => $users,
            'orders' => $orders
        ]);
    }
}
