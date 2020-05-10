<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TestimonialeRequest;
use App\Testimoniale;
use Illuminate\Support\Facades\Storage;

class TestimonialeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimoniales = Testimoniale::all();
        return view('Testimoniales/Testimoniale.index', compact('testimoniales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Testimoniales/Testimoniale/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestimonialeRequest $request)
    {
        $testimoniale = new Testimoniale();

        $testimoniale->nom = request('nom');
        $testimoniale->fonction = request('fonction');
        $testimoniale->img_path = request('img_path')->store('img');
        $testimoniale->commentaire = request('commentaire');
        
        $testimoniale->save();

        return redirect()->route('Testimoniale.index');
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
        $testimoniale = Testimoniale::find($id);

        return view('Testimoniales/Testimoniale.edit', compact('testimoniale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TestimonialeRequest $request, $id)
    {
        $testimoniale = Testimoniale::find($id);
        Storage::delete($testimoniale->img_path);
        $testimoniale->nom = request('nom');
        $testimoniale->fonction = request('fonction');
        $testimoniale->img_path = request('img_path')->store('img');
        $testimoniale->commentaire = request('commentaire');

        $testimoniale->save();

        return redirect()->route('Testimoniale.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimoniale = Testimoniale::find($id);

        Storage::delete($testimoniale->img_path);

        $testimoniale->delete();

        return redirect()->back();
    }

    // public function viewTestimoniale(Testimoniale $testimoniale)
    // {
    //     $testimoniale->with(['testimoniales' => function ($query) {
    //     $query->latest('id'); // can use latest('id') or orderBy('id', 'desc')
    //     }]);

    //     return view('Testimoniale.index', compact('testimoniale'));
    // }
}
