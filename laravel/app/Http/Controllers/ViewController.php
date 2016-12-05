<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function showIndex(){
    	return view('pages.index');
    }

    public function showContact(){
    	return view('pages.contact');
    }
}
