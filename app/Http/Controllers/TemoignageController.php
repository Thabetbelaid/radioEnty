<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Temoignage;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class TemoignageController extends Controller
{
    //
    public function index()
    {
        $auteurs  = DB::table('users')
        ->join('temoignages', 'users.id', '=', 'temoignages.uploader')
        ->select("users.*")
        ->get();
        return view("temoignages.index",[
            "auteurs"=>$auteurs
        ]);
    }
    public function create()
    {
        return view('temoignages.create');
    }
    public function store(Request $request)
    {
        $tm = new Temoignage;
        $tm->message = $request->get("message");
        $tm->uploader = auth()->user()->id;
        $tm->titre = $request->get('titre');
        $tm->image=$request->file('image');
        $tm->save();
        return redirect()->action(
            [TemoignageController::class, "index"] );

    }
    public function show(Temoignage $tn)
    {
        return view('temoignages.show',["temoignage"=>$tn]);
    }
    public function users_temoignage(string $id)
    {   
        $user = User::where('id',$id)->first();
        $tms = Temoignage::where('uploader',$id)->orderBy('created_at','desc')->get();
        return view ('temoignages.list',[
            "temoignages"=>$tms,
        
            "auteur"=>$user
        ]);
    }
}
