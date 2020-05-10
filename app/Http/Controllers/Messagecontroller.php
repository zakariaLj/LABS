<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class Messagecontroller extends Controller
{
    public function index()
    {
        $messages = Message::all();
        return view('/Message/mail',compact('messages'));
    }
    public function store()
    {
        $message = new Message();

        $message->Nom = request('nom');
        $message->Email = request('email');
        $message->Sujet = request('subject');
        $message->Message = request('message');

        $message->save();
        return redirect()->route('home');
    }
}
