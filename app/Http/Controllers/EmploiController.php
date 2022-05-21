<?php

namespace App\Http\Controllers;


use App\Emploie;

class EmploiController extends Controller
{
  
    public function show()
    {
        $emploi = Emploie::latest()->first();
        return view('emplois/show',["emploi"=>$emploi]);
    }
}
