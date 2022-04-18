<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actualite;

class ActualiteController extends Controller
{
    //
    public function index()
    {
        $actualites = Actualite::all();
        return view("actualites.index",[
            "actualites"=>$actualites 
            
        ]);
    }
    //
    public function new()
    {
        return view('actualites.create');
    }
    //
    public function create(Request $request)
    {
       
    }
    public function show(Actualite $actualite )
    {
        $actualites = actualite::latest()->take(5)->get();
        return view ('actualites.show',
        [
            "actualite"=>$actualite,
            "actualites"=>$actualites
        ]);
    }
    //
    public function update()
    {
        // $actalite=
        return view('actualites.update',["actualite"=>$actalite]);
    }
    public function edit(Request $rq)
    {
        # code...
    }
    //
    public function delete()
    {
        # code...
    }
}
