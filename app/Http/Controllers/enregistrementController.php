<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enregistrement;

class enregistrementController extends Controller
{
    public function index()
    {
        $enregistrements = Enregistrement::all();
        return view("enregistrements.index",[
            "enregistrements"=>$enregistrements
        ]);
    }
    public function create()
    {
        return view('enregistrements.create');
    }
    public function store(Request $request)
    {
        $enregistrement = new Enregistrement;
        $enregistrement->contant = $request->file("message");
        $enregistrement->sender_name = auth()->user()->name;
        $enregistrement->save();
        return redirect()->action(
            [enregistrementController::class, "index"] );

    }
    public function show(Enregistrement $en)
    {
        return view('enregistrements.show',["enregistrement"=>$en]);
    }

}
