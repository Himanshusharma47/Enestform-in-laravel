<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Signup;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart_data(Request $request){
        $add = new Cart;
        if($request->isMethod('post'))
        {
            $add->userid = $request->get('userid');
            $add->productid = $request->get('productid');
            $add->quantity = $request->get('quantity');
            $add->save();
        }
        return redirect('home-page')->with('success','Add To Cart Successfully');
    }
}
