<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Presentation;
class PresentationController extends Controller
{
    public function index()
    {
        $presentation = Presentation::find(1);
        return view('Presentation/index',compact('presentation'));
    }

    public function edit()
    {
        $presentation = Presentation::find(1);
        if ($presentation != null) {
            return view('Presentation/edit',compact('presentation'));
        } else {
            return view('Presentation/edit');
        }
        
        
    }

    public function update()
    {

        $presentation = Presentation::find(1);

        if($presentation != null)
        {
            $presentation->Titre  = request('titre');
            $presentation->NomBtn = request('nombtn');
            $presentation->TextVert = request('textvert');
            $presentation->save();
            
            return redirect()->route('presentation.index');
        }else{

            $presentation = new Presentation();
            $presentation->Titre = request('titre');
            $presentation->NomBtn = request('nombtn');
            $presentation->TextVert = request('textvert');
            $presentation->save();

            return redirect()->route('presentation.index');
        }


    }
}
