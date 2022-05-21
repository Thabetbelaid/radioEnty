<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('gallery',[
            "images"=>[],
            "events"=>$events]);
    }
    public function findByEvent(int $event)
    {
        $events = Event::all();
        $images = Gallery::where('event_id',$event)->get();
        return view('gallery',[
            "images"=>$images,
            "events"=>$events]);
    }
}
