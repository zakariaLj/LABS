<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimoniale1;
class Testimoniale1Controller extends Controller
{
    public function index()
    {
        $testimoniale1 = Testimoniale1::find(1);
        return view('Testimoniales/Titre/index',compact('testimoniale1'));
    }


     public function edit()
     {
        $testimoniale1 = Testimoniale1::find(1);

             if ($testimoniale1 != null) {
                return view('Testimoniales/Titre/edit',compact('testimoniale1'));
            } else {
                return view('Testimoniales/Titre/edit');
     }


     }

     public function update()
     {

        $testimoniale1 = Testimoniale1::find(1);

            if($testimoniale1 != null)
            {
                $testimoniale1->Titre = request('titre');

                $testimoniale1->save();

                return redirect()->route('testimoniale1.index');
             }else{

                $testimoniale1 = new Testimoniale1();
                
                $testimoniale1->Titre = request('titre');

                $testimoniale1->save();

                return redirect()->route('testimoniale1.index');
            }


     }
}
