<?php

namespace App\Http\Controllers;

use App\Dish;
use App\Table;
use Illuminate\Http\Request;
use App\Order;
use Cart;
use DB;
use Session;

class OrderController extends Controller
{
    public function getTakeaway(){
        $food = Dish::all();
        $foodCollect = collect($food);
        $firstRow = $foodCollect->only(0,1,2,3);
        $secondRow = $foodCollect->only(4,5,6,7);
        return view('order.takeaway',[
            'firstRow' => $firstRow,
            'secondRow' => $secondRow
        ]);
    }

    public function getReservation(){
        return view('order.reservation');
    }

    public function postReservation(Request $request){

        $reserved = Order::where([
                            'date' => $request->input('date'),
                            'time' => $request->input('time')
                        ])
                        ->leftJoin('tables', 'ref_tableID', '=', 'tables.tableID')
                        ->get();

        $available = Table::whereDoesntHave('orders')
                    ->get();

        $request->session()->flash('tables',true);
        $request->session()->put('date',$request->input('date'));
        $request->session()->put('time',$request->input('time'));

        return view('order.reservation',[
            'available' => $available,
            'reserved' => $reserved
        ]);
    }

    public function getReservationDish(){
        $carts = Cart::content();

        if($carts->isEmpty()){
            return redirect()->route('order.reservation');
        } else {
            $products = Dish::all();
            $dishCollect = collect($products);
            $firstProductRow = $dishCollect->only(0,1,2,3);
            $secondProductRow = $dishCollect->only(4,5,6,7);

            foreach($carts as $cart){
                return view('order.dish',[
                    'date' => Session::get('date'),
                    'time' => Session::get('time'),
                    'name' => $cart->name,
                    'firstRow' => $firstProductRow,
                    'secondRow' => $secondProductRow
                ]);
            }
        }
    }
}
