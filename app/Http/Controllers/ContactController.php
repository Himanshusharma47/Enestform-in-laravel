<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\UseCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact_data(Request $request){
        $add = new Contact;
        if($request->isMethod('post'))
        {
            $add->fullname = $request->get('fullname');
            $add->email = $request->get('email');
            $add->message = $request->get('message');
            $add->save();
        }
        return redirect('home-page')->with('success','Feeback Added Successfully');
    }
}
