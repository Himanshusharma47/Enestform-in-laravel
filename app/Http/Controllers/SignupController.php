<?php

namespace App\Http\Controllers;
use App\Models\Signup;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class SignupController extends Controller
{

    // sign up data function start here
    public function signup_data(Request $request){
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email|unique:signups',
            'password' => 'required|max:4|regex:/[@$!%*#?&]/',
        ]);

        $add  =  new Signup;
        if($request->isMethod('post'))
        {
            $add->fullname = $request->get('fullname');
            $add->email = $request->get('email');
            $add->password = hash::make($request->get("password"));
            $add->save();
        }
        return redirect()->back()->with('success', 'Sign-Up Successfully Done. Now Login');
    }



}
