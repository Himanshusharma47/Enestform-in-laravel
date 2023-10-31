<?php

namespace App\Http\Controllers;
use App\Models\Signup;
use App\Models\AddCategory;
use App\Models\AddProduct;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    // function to display loginForm
    public function loginForm()
    {
        return view('login');
    }

    // homePage data show here
    public function homePage()
    {
        $data = AddCategory::all();
        $products = AddProduct::all();

        return view('home', compact('data', 'products'));
    }

    // contactPage function start here
    public function contactPage()
    {
        if(Auth::guard('signup')->check()) {
            $data = AddCategory::all();

            return view('contact', compact('data'));
        }
        else {

            return redirect('login-form')->with('error', 'First Login Please');
        }
    }

    // addProductPage function start here
    public function addProductPage(Request $request, $id)
    {

        $user = Auth::guard('signup')->user();
        $userId = $user->id;
        $data = AddCategory::all();
        $product = AddProduct::where('id', $id)->get();

        return view('add_product',compact('data', 'product', 'userId'));
    }

    // buyProductPage function start here
    public function buyProductPage(Request $request,$id)
    {

        $data = AddCategory::all();
        $category = AddCategory::where('id', $id)->get();
        $product = AddProduct::where('category_id', $id)->get();

        return view('buy_product', compact('data', 'category', 'product'));
    }



}



