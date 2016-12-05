<?php

namespace App\Http\Controllers;

use App\Person;
use App\User;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use League\Flysystem\Exception;

class AuthController extends Controller
{
    public function showLogin(){
        if(Auth::check()){
            return redirect()->route('profile');
        }
        return view('user.login');
    }

    public function showRegister(){
        return view('user.register');
    }

    public function showProfile(){
        return view('user.profile');
    }

    public function showEdit(){
        $person = Person::where('id',Auth::id())->get();

        return view('user.edit',[
            'persons' => $person
        ]);
    }

    public function showOrders(){
        $orders = Order::where('ref_person_id',Auth::user()->user_id)->get();
        return view('user.orders',[
            'orders' => $orders
        ]);
    }





    public function logout(){
        try{
            Auth::logout();
            return redirect()->route('login')->with('success','Utlogging velykket');
        }catch(Exception $exception){
            return redirect()->route('login')->with('error','Utlogging misslyktes');
        }
    }


    public function postLogin(Request $request){
        $this->validate($request,[
            'username' => 'required',
            'password' => 'required'
        ]);
        if(Auth::attempt([
            'username' => $request->input('username'),
            'password' => $request->input('password')
        ])){
            return redirect()->route('profile');
        } else {
            return redirect()->route('login')->with('error','Brukernavnet eller passordet var feil');
        }
    }

    public function postRegister(Request $request){
        $this->validate($request,[
            'username' => 'required',
            'password' => 'required',
            're-password' => 'same:password',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phonenumber' => 'required',
            'adress' => 'required'
        ]);
        try{
            $id = $this->quickRandom();

            $user = new User([
                'user_id' => $id,
                'username' => $request->input('username'),
                'password' => Hash::make($request->input('password')),
                'isAdmin' => false,
            ]);
            $user->save();

            $person = new Person([  
                'person_id' => $id,
                'firstname' => $request->input('firstname'),
                'lastname' => $request->input('lastname'),
                'email' => $request->input('email'),
                'phonenumber' => $request->input('phonenumber'),
                'adress' => $request->input('adress')
            ]);
            $person->save();
            return redirect()->route('login')->with('success','Registrering var velykket,du kan nå logge inn');
        }catch(Exception $exception){
            return redirect()->route('register')->with('error','Registrering misslyktes');
        }
    }

    public function postEdit(Request $request){
        $this->validate($request,[
            'username' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phonenumber' => 'required',
            'adress' => 'required'
        ]);
        try{
            $user = User::find(Auth::id());
            $user->username = $request->input('username');
            $user->save();

            $person = Person::find(Auth::id());
            $person->firstname = $request->input('firstname');
            $person->lastname = $request->input('lastname');
            $person->email= $request->input('email');
            $person->phonenumber = $request->input('phonenumber');
            $person->adress = $request->input('adress');

            $person->save();

            return redirect()->route('edit')->with('success','Brukerprofilen ble oppdatert!');
        }catch(Exception $exception){
            return redirect()->route('edit')->with('error','En feil oppstod ved oppdatering av brukerprofilen');
        }
    }

    public function deleteOrder(Request $request,$order_id){
        try{
            Order::where('order_id',$order_id)->delete();
            return redirect()->route('orders')->with('success','Din ordre ble slettet');
        }catch(Exception $exception){
            return redirect()->route('orders')->with('error','Noe gikk galt under sletting av orderen din');
        }
    }

    public static function quickRandom($length = 16)
    {
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        return substr(str_shuffle(str_repeat($pool, $length)), 0, $length);
    }
}
