<?php

namespace App\Http\Controllers;
use App\Models\Signup;
use App\Models\UseCategory;
use App\Models\UseProduct;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    // login form function
    public function login_form(){
        return view('login');
    }

    // home page data show here
    public function home_page(){
        $data = UseCategory::all();
        $products = UseProduct::all();
        return view('home',compact('data', 'products'));
    }

    // contact page function start here
    public function contact_page(){
        if(Auth::guard('signup')->check()){
            $data = UseCategory::all();
            return view('contact', compact('data'));
        }
        else
        {
            return redirect('login-form')->with('error','First Login Please');
        }
    }

    // add-product-page function start here
    public function add_product_page(Request $request,$id){

        $user = Auth::guard('signup')->user();
        $userId = $user->id;
        $data = UseCategory::all();
        $product=UseProduct::where('id',$id)->get();
        return view('add_product',compact('data','product','userId'));
    }

    // buy-product-page function start here
    public function buy_product_page(Request $request,$id){
        $data = UseCategory::all();
        $category=UseCategory::where('id',$id)->get();
        $product=UseProduct::where('category_id',$id)->get();
        return view('buy_product',compact('data','category','product'));
    }



}



