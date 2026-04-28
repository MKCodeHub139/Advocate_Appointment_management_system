<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    //
    public function store(Request $request){
        // validate
            $validate =$request->validate([
                'name'=>'required|max:255',
                'email'=>'required|email|max:255',
                'subject'=>'required',
                'message'=>'required',
                ]);
                // create
                $contact =Contact::create($validate);
                // email
                    Mail::to('kaif76979@gmail.com')->send(new ContactMail($validate));
                    return redirect()->route('contact')->with('message','Email Sended Successfully');
    }
}
