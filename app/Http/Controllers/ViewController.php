<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function login_form(){
        return view('login');
    }
    public function home_page(){
        return view('home');
    }
    public function contact_page(){
        return view('contact');
    }
    public function add_product_page(){
        return view('add_product');
    }
    public function buy_product_page(){
        return view('buy_product');
    }
}
