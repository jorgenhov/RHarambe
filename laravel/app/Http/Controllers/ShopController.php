<?php

namespace App\Http\Controllers;

use App\Drink;
use App\Food;
use App\Table;
use App\Person;
use App\Order;
use Cart;
use Session;
use Auth;
use App\ShoppingCart;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function showCart(){
        return view('shop.cart');
    }

    public function showCheckout(){
        if(Auth::check()){
            $cart_id = $this->quickRandom();
            $cartCollection = Cart::getContent();

            if(Session::get('date') == null){
                $cart = new ShoppingCart([
                    'cart_id' => $cart_id,
                    'content' => serialize($cartCollection->toJson()),
                ]);
                $cart->save();
                $order = new Order([
                    'order_id' => $this->quickRandom(),
                    'date' => '',
                    'time' => '',
                    'ref_person_id' => Auth::user()->user_id,
                    'ref_cart_id' => $cart_id,
                    'ref_table_id' => ''
                ]);
                $order->save();
                return redirect()->route('confirm');
            } else {
                $cart = new ShoppingCart([
                    'cart_id' => $cart_id,
                    'content' => serialize($cartCollection->toJson()),
                ]);
                $cart->save();
                $order = new Order([
                    'order_id' => $this->quickRandom(),
                    'date' => Session::get('date'),
                    'time' => Session::get('time'),
                    'ref_person_id' => Auth::user()->user_id,
                    'ref_cart_id' => $cart_id,
                    'ref_table_id' => Session::get('table')
                ]);
                $order->save();
                return redirect()->route('confirm');
            }
                
        } else {
            if(Cart::isEmpty()){
                return redirect()->back()->with('error','handlekurven var tom, du kan ikke fullføre bestillingen');
            } else {
                return view('shop.checkout');
            }
        }
    }

    public function showConfirm(Request $request){
        Cart::clear();
        if(Session::has('date')){
            $request->session()->forget('date');
            $request->session()->forget('time');
        }
        return view('shop.confirm');
    }




    public function postCheckout(Request $request){
        $this->validate($request,[
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phonenumber' => 'required',
            'adress' => 'required'
        ]);
        try{
            $person_id = $this->quickRandom();
            $cart_id = $this->quickRandom();
            $cartCollection = Cart::getContent();

            $person = new Person([
                'person_id' => $person_id,
                'firstname' => $request->input('firstname'),
                'lastname' => $request->input('lastname'),
                'email' => $request->input('email'),
                'phonenumber' => $request->input('phonenumber'),
                'adress' => $request->input('adress')
            ]);
            $person->save();
            $cart = new ShoppingCart([
                'cart_id' => $cart_id,
                'content' => serialize($cartCollection->toJson()),
            ]);
            $cart->save();
            $order = new Order([
                'order_id' => $this->quickRandom(),
                'date' => Session::get('date'),
                'time' => Session::get('time'),
                'ref_person_id' => $person_id,
                'ref_cart_id' => $cart_id,
                'ref_table_id' => Session::get('table')
            ]);
            $order->save();
            return redirect()->route('confirm');
        }catch(Exception $exception){
            return redirect()->back()->with('error','Noe gikk galt under bestillingen. Den ble ikke sendt');
        }
    }






    public function addToCart(Request $request,$id,$category){
        switch($category){
            case 'food':
                $food = Food::find($id);
                Cart::add([
                    'id' => $food->id,
                    'name' => $food->name,
                    'price' => $food->price,
                    'quantity' => 1,
                ]);
                return redirect()->back()->with('success','Matrett: '.$food->name.'ble lagt til i handlekurven');
                break;
            case 'drink':
                $drinks = Drink::where('id',$id)->get();
                break;
            case 'table':
                $table = Table::find($id);
                if(Session::has('table')){
                    Session::forget('table');
                    Cart::clear();
                        Cart::add([
                            'id' => $table->id,
                            'name' => $table->number,
                            'price' => 00.00,
                            'quantity' => 1,
                            'attributes' => array(
                                'date' => $request->input('date'),
                                'time' => $request->input('time')
                            )
                        ]);
                        Session::put('table',$table->number);
                        return redirect()->route('food')->with('success','Bord nummer:'.$table->number.'ble lagt til i handlekurven');
                } else {
                    Cart::add([
                        'id' => $table->id,
                        'name' => $table->number,
                        'price' => 00.00,
                        'quantity' => 1,
                        'attributes' => array(
                            'date' => $request->input('date'),
                            'time' => $request->input('time')
                        )
                    ]);
                    Session::put('table',$table->number);
                    return redirect()->route('food')->with('success','Bord nummer:'.$table->number.'ble lagt til i handlekurven');
                }
                break;
        }
    }

    public function updateToCart(Request $request,$id,$quantity){
        $condition = new \Darryldecode\Cart\CartCondition(array(
            'name' => 'VAT 12.5%',
            'type' => 'tax',
            'target' => 'subtotal',
            'value' => '12.5%',
            'attributes' => array( // attributes field is optional
                'description' => 'Value added tax',
                'more_data' => 'more data here'
            )
        ));
        $food = Food::find($id);

    }

    public function deleteToCart(Request $request,$id,$category){
        switch($category) {
            case 'table':
                $table = Table::find($id);
                Cart::remove($table->id);
                $request->session()->forget('date');
                $request->session()->forget('time');
                $request->session()->forget('table');
                return redirect()->back()->with('success','Bordet ble slettet fra handlekurven');
                break;
            case 'food';
                $food = Food::find($id);
                Cart::remove($food->id);
                return redirect()->back()->with('success','Produktet ble slettet fra handlekurven');
                break;
            default:
                return redirect()->back()->with('error', 'Noe gikk galt ved sletting av objektet');
        }
    }

        public static function quickRandom($length = 16)
    {
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        return substr(str_shuffle(str_repeat($pool, $length)), 0, $length);
    }
}
