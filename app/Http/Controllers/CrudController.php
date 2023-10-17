<?php

namespace App\Http\Controllers;
use App\Models\Signup;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class CrudController extends Controller
{

    // sign up data function start here 
    public function signup_data(Request $request){
        $add  =  new Signup;
        if($request->isMethod('post'))
        {
            $add->fullname = $request->get('fullname');
            $add->email = $request->get('email');
            $add->password = hash::make($request->get("password")) ;
            $add->save();
        }
        return redirect('login-form');
    }


    
}
