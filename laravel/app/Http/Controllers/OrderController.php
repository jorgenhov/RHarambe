<?php

namespace App\Http\Controllers;

use App\Food;
use App\Order;
use App\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function showFood(){
        $food = Food::all();
        $collect = collect($food);
        $firstItem = $collect->only(0,1,2,3);
        $secondItem = $collect->only(4,5,6,7);
        return view('order.food',[
            'firstRow' => $firstItem,
            'secondRow' => $secondItem
        ]);
    }

    public function showTable(){
        return view('order.table');
    }

    public function showTakeaway(){
        $food = Food::all();
        $collect = collect($food);
        $firstItem = $collect->only(0,1,2,3);
        $secondItem = $collect->only(4,5,6,7);
        return view('order.takeaway',[
            'firstRow' => $firstItem,
            'secondRow' => $secondItem
        ]);
    }

    public function postTable(Request $request){
        $reserved = Order::where([
            'date' => $request->input('date'),
            'time' => $request->input('time')
            ])
            ->leftJoin('tables', 'ref_table_id', '=', 'tables.id')
            ->get();

        $available = Table::whereDoesntHave('orders')->get();

        $request->session()->flash('tables',true);
        if(Session::has('date') && Session::has('time')){
            Session::forget('date');
            Session::forget('time');
            $request->session()->put('date',$request->input('date'));
            $request->session()->put('time',$request->input('time'));
        } else {
            $request->session()->put('date',$request->input('date'));
            $request->session()->put('time',$request->input('time'));
        }

        return view('order.table',[
            'available' => $available,
            'reserved' => $reserved
        ]);
    }
}
