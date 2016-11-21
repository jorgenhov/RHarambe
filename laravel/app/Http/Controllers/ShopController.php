<?php

namespace App\Http\Controllers;

use App\Dish;
use App\Drink;
use App\Order;
use App\Person;
use App\Table;
use App\ShopCarts;

use Illuminate\Http\Request;
use Cart;
use Auth;
use Illuminate\Support\Facades\Session;
use League\Flysystem\Exception;

class ShopController extends Controller
{
    public function getCart(){
        return view('shop.cart');
    }

    public function addToCart(Request $request,$id){
          // dd(Cart::content());
          // Cart::destroy();


        $tables = Table::where('tableID',$id)->get();
        $dishes = Dish::where('dishID',$id)->get();
        $drinks = Drink::where('drinkID',$id)->get();

        foreach($drinks as $drink){
            $drink = $drink;
        }
        foreach ($dishes as $dish){
            $dish = $dish;
        }
        foreach($tables as $table){
            $table = $table;
        }


        if(Cart::content()->isEmpty()){

            if($tables->isEmpty()){
                if($dishes->isEmpty()){
                    if($drinks->isEmpty()){
                        echo "WTF, well error should be here";
                    } else {
                        Cart::add([
                            'id' => $drink->drinkID,
                            'name' => $drink->name,
                            'qty' => 1,
                            'price' => $drink->price
                        ]);
                        $request->session()->flash('added',''.$drink->name.' ble lagt inn i handlekurven');
                        return redirect()->back();
                    }
                } else {
                    Cart::add([
                        'id' => $dish->dishID,
                        'name' => $dish->name,
                        'qty' => 1,
                        'price' => $dish->price
                    ]);
                    $request->session()->flash('added',''.$dish->name.' ble lagt inn i handlekurven');
                    return redirect()->back();
                }
            } else {
                Session::put('table',$table->number);
                Session::put('tableID',$table->tableID);
                Session::put('table',$table->number);
                Cart::add([
                    'id' => $table->tableID,
                    'name' => $table->number,
                    'qty' => 1,
                    'price' => 0,
                    'options' => [
                        'date' => Session::get('date'),
                        'time' => Session::get('time')
                    ]
                ]);
                return redirect()->route('order.dish');
            }
        } else {
            if($tables->isEmpty()){

            } else {
                Cart::destroy();
                Session::put('table',$table->number);
                Session::put('tableID',$table->tableID);
                Cart::add([
                    'id' => $table->tableID,
                    'name' => $table->number,
                    'qty' => 1,
                    'price' => 0,
                    'options' => [
                        'date' => Session::get('date'),
                        'time' => Session::get('time')
                    ]
                ]);
                return redirect()->route('order.dish');
            }
            if($drinks->isEmpty()){

            } else {
                Cart::add([
                    'id' => $drink->drinkID,
                    'name' => $drink->name,
                    'qty' => 1,
                    'price' => $drink->price
                ]);
                $request->session()->flash('added',''.$drink->name.' ble lagt inn i handlekurven');
                return redirect()->back();
            }

            if($dishes->isEmpty()){

            } else {
                Cart::add([
                    'id' => $dish->dishID,
                    'name' => $dish->name,
                    'qty' => 1,
                    'price' => $dish->price
                ]);
                $request->session()->flash('added',''.$dish->name.' ble lagt inn i handlekurven');
                return redirect()->back();
            }
        }
    }

    public function addToCartTakeaway(Request $request,$id){
        $dishes = Dish::where('dishID',$id)->get();
        $drinks = Drink::where('drinkID',$id)->get();

        foreach($drinks as $drink){
            $drink = $drink;
        }
        foreach ($dishes as $dish){
            $dish = $dish;
        }
        if($dishes){
            Cart::add([
                'id' => $dish->dishID,
                'name' => $dish->name,
                'qty' => 1,
                'price' => $dish->price
            ]);
            $request->session()->flash('added',''.$dish->name.' ble lagt inn i handlekurven');
            return redirect()->back();
        }
        if($drinks){
            Cart::add([
                'id' => $drink->drinkID,
                'name' => $drink->name,
                'qty' => 1,
                'price' => $drink->price
            ]);
            $request->session()->flash('added',''.$drink->name.' ble lagt inn i handlekurven');
            return redirect()->back();
        }

    }

    public function deleteFromCart(Request $request, $id,$rowId){
        $tables = Table::where('tableID',$id)->get();
        $dishes = Dish::where('dishID',$id)->get();
        $drinks = Drink::where('drinkID',$id)->get();

        if($tables){
            foreach($tables as $table){
                $request->session()->forget('table');
                $request->session()->forget('date');
                $request->session()->forget('time');
                Cart::remove($rowId);
            }
        }
        if($dishes){
            foreach ($dishes as $dish){
                Cart::remove($rowId);
            }
        }
        if($drinks){
            foreach($drinks as $drink){
                Cart::remove($rowId);
            }
        }
        return redirect()->back();
    }

    public function getCheckout(Request $request){
        if(Auth::check()) {
            $person = Person::where('userID', Auth::user()->userID);
            $orderID = $this->generateRandomString();
            $cartID = $this->generateRandomString();

            if(Session::has('tableID')){
                $order = new Order([
                    'orderID' => $orderID,
                    'time' => Session::get('time'),
                    'date' => Session::get('date'),
                    'ref_personID' => Auth::user()->userID,
                    'ref_cartID' => $cartID,
                    'ref_tableID' => Session::get('tableID')
                ]);
                $order->save();

                $cart = new ShopCarts([
                    'cartID' => $cartID,
                    'date' => date("Y-m-d"),
                    'time' => date("H:m:s"),
                    'content' => serialize(Cart::content())
                ]);
                $cart->save();
                 Cart::destroy();
                $request->session()->forget('tableID');
                $request->session()->forget('date');
                $request->session()->forget('time');
                return redirect()->route('shop.confirm');
            } else {
                $order = new Order([
                    'orderID' => $orderID,
                    'time' => 'NULL',
                    'date' => 'NULL',
                    'ref_personID' => Auth::user()->userID,
                    'ref_cartID' => $cartID,
                    'ref_tableID' => Session::get('tableID')
                ]);
                $order->save();
                $cart = new ShopCarts([
                    'cartID' => $cartID,
                    'date' => date("Y-m-d"),
                    'time' => date("H:m:s"),
                    'content' => serialize($carts)
                ]);
                $cart->save();
                 Cart::destroy();
                $request->session()->forget('tableID');
                $request->session()->forget('date');
                $request->session()->forget('time');
                return redirect()->route('shop.confirm');
            }
        } else {
            return redirect()->route('shop.manualCheckout');
        }
    }

    public function getConfirm(){
        return view('shop.confirm');
    }

    public function getManualCheckout(){
        return view('shop.manualCheckout');
    }

    public function postManualCheckout(Request $request){
                $orderID = $this->generateRandomString();
                $table = Table::where('tableID',Session::get('tableID'))->get();
                $cartID = $this->generateRandomString();
        if(Session::has('tableID')){
                $person = new Person([
                    'personID' => md5($request->input('email')),
                    'firstname' => $request->input('firstname'),
                    'lastname' => $request->input('lastname'),
                    'email' => $request->input('email'),
                    'phonenumber' => $request->input('phonenumber'),
                    'adress' => $request->input('adress'),
                ]);
                $person->save();

                $order = new Order([
                    'orderID' => $orderID,
                    'time' => Session::get('time'),
                    'date' => Session::get('date'),
                    'ref_personID' => md5($request->input('email')),
                    'ref_cartID' => $cartID ,
                    'ref_tableID' => Session::get('tableID'),
                ]);
                $order->save();

                $cart = new ShopCarts([
                    'cartID' => $cartID,
                    'content' => serialize(Cart::content())
                ]);
                $cart->save();
                    Cart::destroy();
                    $request->session()->forget('tableID');
                    $request->session()->forget('date');
                    $request->session()->forget('time');
                    return redirect()->route('shop.confirm');
            } else {
                    $person = new Person([
                        'personID' => md5($request->input('email')),
                        'firstname' => $request->input('firstname'),
                        'lastname' => $request->input('lastname'),
                        'email' => $request->input('email'),
                        'phonenumber' => $request->input('phonenumber'),
                        'adress' => $request->input('adress'),
                    ]);
                    $person->save();

                    $order = new Order([
                        'orderID' => $orderID,
                        'time' => 'NULL',
                        'date' => 'NULL',
                        'ref_personID' => md5($request->input('email')),
                        'ref_cartID' => $cartID ,
                        'ref_tableID' => 'NULL',
                    ]);
                    $order->save();

                    $cart = new ShopCarts([
                        'cartID' => $cartID,
                        'content' => serialize(Cart::content())
                    ]);
                    $cart->save();
                    Cart::destroy();
                    $request->session()->forget('tableID');
                    $request->session()->forget('date');
                    $request->session()->forget('time');
                    return redirect()->route('shop.confirm');
                }
            }



        private function generateRandomString($length = 10) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }
}
