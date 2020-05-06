<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Logo;
class LogoController extends Controller
{
    public function index(){
        $logo = Logo::find(1);
        return view('Menu/Logo.index',compact('logo'));
    }

    public function edit(){
       $logo = Logo::find(1);
        if($logo != null){
        return view('Menu/Logo.edit',compact('logo'));
        }else{

            return view('Menu/Logo.edit');
        }

    }

    public function update(){
        $logo = Logo::find(1);
        if($logo != null){ // si il existe deja recurer et modifier
            if(request('img') != null){
                $logo->Logo_path =request('img')->store('img');
    
            }
            $logo->save();
            return redirect()->route('logo.index');
    
            }       else{ // Dans ce cas il n'existe pas on va devoir avoir besoin d'un new logo
            $logo = new Logo();
            $logo->Logo_path = request('img')->store('img');
    
            $logo->save();
            return redirect()->route('logo.index');
    }
    }


}