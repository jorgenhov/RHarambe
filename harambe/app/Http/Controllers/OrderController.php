<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;

class OrderController extends Controller
{
    public function getTakeaway(){
        $food = Food::all();
        $foodCollect = collect($food);
        $firstRow = $foodCollect->only(0,1,2,3);
        $secondRow = $foodCollect->only(4,5,6,7);
        return view('order.takeaway',[
            'firstRow' => $firstRow,
            'secondRow' => $secondRow
        ]);
    }

    public function getTableReservation(){

    }

    public function postTableReservation(){

    }

    public function getFoodReservation(){

    }

    public function postFoodReservation(){
    	
    }
}
