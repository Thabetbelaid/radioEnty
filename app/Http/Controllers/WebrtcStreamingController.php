<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebrtcStreamingController extends Controller
{
    public function index()
    {
        return view('streams/video-broadcast', ['type' => 'broadcaster', 'id' => auth()->id()]);
    }
    public function consumer(Request $request, $streamId)
    {
        return view('streams/video-broadcast', ['type' => 'consumer', 'streamId' => $streamId, 'id' => Auth::id()]);
    }
    public function makeStreamOffer(Request $request)
    {
        $data['broadcaster'] = $request->broadcaster;
        $data['receiver'] = $request->receiver;
        $data['offer'] = $request->offer;

        event(new StreamOffer($data));
    }
    public function makeStreamAnswer(Request $request)
    {
        $data['broadcaster'] = $request->broadcaster;
        $data['answer'] = $request->answer;
        event(new StreamAnswer($data));
    }
}
