<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\TeamerRequest;
use App\Teamer;

class TeamerController extends Controller
{
    public function index()
    {
        $teamer = Teamer::find(1);
        return view('Teams/Ceo/index',compact('teamer'));
    }
         
    public function edit()
    {
        $teamer = Teamer::find(1);

        if($teamer != null)
        {
            return view('Teams/Ceo/edit',compact('teamer'));
        }else{
            return view('Teams/Ceo/edit');
        }
    }


    public function update()
    {
        $teamer = Teamer::find(1);
        if ($teamer !=null) {
            if (request('img') != null) {
                Storage::delete($teamer->Teamer_path);
                $teamer->Teamer_path = request('img')->store('img');
            }
            $teamer->Ceo = request('ceo');
            $teamer->FunctionCeo = request('function');

            $teamer->save();
            return redirect()->route('ceo.index');
        } else {
             $teamer = new teamer();

            $teamer->Ceo = request('ceo');
            $teamer->FunctionCeo = request('function');
            $teamer->Teamer_path = request('img')->store('img');

             $teamer->save();
             return redirect()->route('ceo.index');
        }
    }
}
