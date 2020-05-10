<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ready;
class ReadyController extends Controller
{
    public function index(){
        $ready = Ready::find(1);
        return view('Ready.index',compact('ready'));
    }

    public function edit(){
       $ready = Ready::find(1);
        if($ready != null){
        return view('Ready/edit',compact('ready'));
        }else{

            return view('Ready/edit');
        }

    }

    public function update(){
        $ready = Ready::find(1);
        if($ready != null)
        {
        $ready->Titre = request('titre');
        $ready->Soustitre = request('soustitre');
        $ready->NomBtn = request('nombtn');
        $ready->save();
        return redirect()->route('ready.index');

        } else { // Dans ce cas il n'existe pas on va devoir avoir besoin d'un new ready
        $ready = new Ready();
        $ready->Titre = request('titre');
        $ready->Soustitre = request('soustitre');
        $ready->NomBtn = request('nombtn');

        $ready->save();
        return redirect()->route('ready.index');
    }
    }

}
