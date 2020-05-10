<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Titre;
class TitreController extends Controller
{
    public function index()
    {
        $titre = Titre::find(1);
        return view('Teams/Titre/index ',compact('titre'));
    }

    public function edit()
    {
        $titre = Titre::find(1);

        if($titre != null)
        {
            return view('Teams/Titre/edit',compact('titre'));
           
        }else{

            return view('Teams/Titre/edit');
        }
    }

    public function update()
    {
        $titre = Titre::find(1);
        if ($titre !=null) {
            $titre->Titre1  = request('titre1');
            $titre->Titre2 = request('titre2');
            $titre->Vert = request('textvert');

            $titre->save();
            return redirect()->route('titre.index');
        } else {
            $titre = new Titre();

            $titre->Titre1  = request('titre1');
            $titre->Titre2 = request('titre2');
            $titre->Vert = request('textvert');

            $titre->save();
            return redirect()->route('titre.index');
        }
        
    }
}
