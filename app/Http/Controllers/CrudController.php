<?php

namespace App\Http\Controllers;
use App\Models\Signup;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function sign_data(Request $request){
        $add  =  new Signup;
        if($request->isMethod('post'))
        {
            $add->fullname = $request->get('fullname');
            $add->email = $request->get('email');
            $add->password = $request->get('password');
            $add->save();
        }
        return redirect('login-form');
    }
}
