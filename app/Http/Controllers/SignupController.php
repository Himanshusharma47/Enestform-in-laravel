<?php

namespace App\Http\Controllers;
use App\Models\Signup;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class SignupController extends Controller
{

    // signupData function start here
    public function signupData(Request $request)
    {

        $request->validate([

            'fullname' => 'required',
            'email'    => 'required|email|unique:signups',
            'password' => 'required',

        ]);

        $add  =  new Signup;
        if($request->isMethod('post')) {

            $add->fullname = $request->get('fullname');
            $add->email = $request->get('email');
            $add->password = hash::make($request->get("password"));
            $add->save();
        }

        return redirect()->back()->with('success', 'Sign-Up Successfully Done. Now Login');
    }



}
