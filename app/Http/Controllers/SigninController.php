<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Signup;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\session;

class SigninController extends Controller
{
    public function signin_data(Request $request){
        $request->validate([
            'fullname' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('fullname', 'password');

        // Retrieve the user from the database based on the provided username
        if (Auth::guard('signup')->attempt($credentials)) {
            return redirect()->intended('home-page');
        }
        return redirect("login-form")->with('error', 'Oops! You have entered invalid credentials');
    }

    public function logout(){
        Session::flush();
        Auth::logout();

        return Redirect('/login-form');
    }

}
