<?php

namespace App\Http\Controllers;
use App\Contact;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function save(ContactRequest $request ){
        $validated = $request->validated();

        $contact = new Contact();
        $contact->name=$request->name;
        $contact->phone=$request->phone;
        $contact->email=$request->email;
        $contact->message=$request->message;

        $contact->save();
        return redirect('/');

    }
}
