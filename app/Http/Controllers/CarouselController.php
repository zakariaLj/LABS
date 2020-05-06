<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CarouselRequest;
use App\Carousel;
class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carousels = Carousel::all();
        return view('Carousel.index',compact('carousels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('Carousel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarouselRequest $request)
    {
        $carousel  = new Carousel();

        $carousel->Description   = request('description');
        $carousel->Carousel_path = request('img')->store('img');

        $carousel->save();

        return redirect()->route('Carousel.index');

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
        $carousel = Carousel::find($id);       

        return view('Carousel.edit',compact('carousel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CarouselRequest $request, $id)
    {
        $carousel = Carousel::find($id);

        if(request('img') != null)
        {
            storage::delete($carousel->Carousel_path);
            $carousel->Carousel_path = request('img')->store('img');
        }

        $carousel->Carousel_path = request('img')->store('img');
        $carousel->Description = request('description');

        $carousel->save();
        return redirect()->route('Carousel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carousel = Carousel::find($id);

        Storage::delete($carousel->Carousel_path);

        $carousel->delete();

        return redirect()->back();
    }
}
