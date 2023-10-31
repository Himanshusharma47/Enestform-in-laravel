<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\AddCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactData(Request $request)
    {
            $add = new Contact;

            if($request->isMethod('post')) {
                $add->fullname = $request->get('fullname');
                $add->email = $request->get('email');
                $add->message = $request->get('message');
                $add->save();
            }

            return redirect('home-page')->with('success', 'Feeback Added Successfully');
    }
}
