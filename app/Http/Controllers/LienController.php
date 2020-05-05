<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LienRequest;
use App\Link;

class LienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links = Link::all();
        return view('Menu/Liens.index', compact('links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $link = Link::all();
        if(count($link) < 4 )
        {
            return view('Menu/Liens.create', compact('link'));

        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LienRequest $request)
    {


        $link = new Link();

        $link->Name = request('Nom');
        $link->Lien = request('Lien');

        $link->save();
        return redirect()->route('Liens.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $link = Link::find($id);
        return view('Menu/Liens.edit',compact('link'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LienRequest $request, $id)
    {
        $link = Link::find($id);

        $link->Name = request('Nom');
        $link->Lien = request('Lien');

        $link->save();
        return redirect()->route('Liens.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $link = Link::find($id);

        $link->delete();
        return redirect()->back();

    }
}
