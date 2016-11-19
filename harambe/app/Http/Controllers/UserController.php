<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\User;

class UserController extends Controller
{
    public function getLogin(){
        return view('user.login');
    }

    public function postLogin(Request $request){
        $this->validate($request,[
            'username' => 'required|min:3',
            'password' => 'required|min:6'
        ]);
        if(Auth::attempt([
            'username' => $request->input('username'),
            'password' => $request->input('password')
        ])){
            return redirect()->route('user.profile');
        } else {
            return redirect()->back();
        }
    }

    public function getRegister(){
        return view('user.register');
    }

    public function postRegister(Request $request){
        $this->validate($request,[
            'username' => 'required|min:3',
            'password' => 'required|min:6',
            're-password' => 'same:password',
            'firstname' => 'required|min:3',
            'lastname' => 'required|min:3',
            'email' => 'required',
            'phonenumber' => 'required|min:8',
            'adress' => 'required|min:3'
        ]);
        $user = new User([
            'user_id' => md5($request->input('email')),
            'username' => $request->input('username'),
            'password' => bcrypt($request->input('password'))
        ]);
        $user->save();
        $person = new Person([
            'person_id' => md5($request->input('email')),
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'phonenumber' => $request->input('phonenumber'),
            'adress' => $request->input('adress')
        ]);
        $person->save();
        return $request->session()->flash('register_success','Registrering velykket. Du kan nå logge inn');
        return redirect()->route('user.login');
    }

    public function getProfile(){

    }

    public function getEdit(){

    }

    public function postEdit(){
    	
    }
}
