<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
class VideoController extends Controller
{
    public function index()
    {
        $video = Video::find(1);
        return view('Videoplay/index',compact('video'));
    }
    public function edit()
    {
        $video = Video::find(1);
        if($video != null){
            return view('Videoplay.edit',compact('video'));
        }else{
            return view('Videoplay/edit');
        }
    }

    public function update()
    {
        $video = Video::find(1);
        if ($video != null) {
            $video->Video = request('lien');
            $video->save();

            return redirect()->route('video.index');
        } else {
            $video = new Video();

             $video->Video = request('lien');
             $video->save();
             return redirect()->route('video.index');
        }
        

    }
}
