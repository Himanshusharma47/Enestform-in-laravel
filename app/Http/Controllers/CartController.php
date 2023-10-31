<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\AddProduct;
use App\Models\Signup;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    // cart data function  start here
    public function cartData(Request $request)
    {

        $pstock = $request->get('pstock');
        $productid = $request->get('productid');
        $userid = $request->get('userid') ;
        $quantity = $request->get('quantity') ;

        // cart data table start here
        $add = new Cart;

        if($request->isMethod('post')) {

            if( $quantity > 0 && $quantity <= $pstock ) {
                AddProduct::where('id', $productid)->decrement('pstock', $quantity);
                $add->userid = $userid;
                $add->productid = $productid ;
                $add->quantity = $quantity;
                $add->save();
            }
            else {

                return redirect()->back()->with('error','Quantity must be valid according to the Stock.');
            }
        }

        return redirect()->back()->with('success','Add To Cart Successfully');
    }
}
