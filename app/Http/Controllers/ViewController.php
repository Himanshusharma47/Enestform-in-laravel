<?php

namespace App\Http\Controllers;
use App\Models\Signup;
use App\Models\UseCategory;
use App\Models\UseProduct;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function login_form(){
        return view('login');
    }
    public function home_page(){
        $data = UseCategory::all();
        return view('home',compact('data'));
    }
    public function contact_page(){
        $data = UseCategory::all();
        return view('contact', compact('data'));
    }
    public function add_product_page(){
        // return view('add_product');
        $data = UseCategory::all();
        return view('add_product', compact('data'));
    }

    public function buy_product_page(Request $request,$id){
        $data = UseCategory::all();
        $category=UseCategory::where('id',$id)->get();
        $product=UseProduct::where('category_id',$id)->get();
        return view('buy_product',compact('data','category','product'));  
    }
  
}



