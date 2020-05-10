<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::find(1);
        return view('Contact/index',compact('contact'));
    }

    public function edit()
    {
        $contact = Contact::find(1);
        if(!empty($contact) != null)
        {
          return view('Contact/edit',compact('contact'));
        }else {

            return view('Contact/edit');
        }
    }


    public function update()
    {
        $contact = Contact::find(1);

        if(!empty($contact) != null)
        {
        
            $contact->Titre    =     request('titre');
            $contact->Texte    =     request('text');
            $contact->Adress   =     request('adress');
            $contact->Phone    =     request('phone');
            $contact->Email    =     request('email');
            $contact->Nombtn   =     request('nombtn');

            $contact->save();
            return redirect()->route('contact.index');
            
        }else {

            $contact = new Contact();

            $contact->Titre = request('titre');
            $contact->Texte = request('text');
            $contact->Adress = request('adress');
            $contact->Phone = request('phone');
            $contact->Email = request('email');
            $contact->Nombtn = request('nombtn');
            
            $contact->save();
            return redirect()->route('contact.index');
        }
    }
}
