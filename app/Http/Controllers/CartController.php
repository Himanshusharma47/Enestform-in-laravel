<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\UseProduct;
use App\Models\Signup;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart_data(Request $request){
        $add = new Cart;

        if($request->isMethod('post'))
        {
            $pstock = $request->get('pstock');
            $productid = $request->get('pstock');
            $userid = $request->get('pstock');
            $quantity = $request->get('quantity');
            $add->userid = $userid;
            $add->productid =$productid ;
            $add->quantity = $quantity;
            $add->save();
        }
        return redirect('home-page')->with('success','Add To Cart Successfully');
    }
}
