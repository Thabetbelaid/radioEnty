<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Temoignage;
use App\Commentaire;
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
    public function ajouter_comment(string $id, Request $request)
    {
        $tn = temoignage::find($id)->first();
        $comment = new Commentaire;
        $comment->name = $request->get('name');
        $comment->email = $request->get('email');
        $comment->message = $request->get('message');
        $comment->temoignage_id = $tn->id;
        $comment->save();
        return redirect('temoignages/'.$tn->id);

    }
    public function show(string $id)
    {
        $tn = temoignage::find($id)->first();
        $commentaires = Commentaire::where('temoignage_id',$tn->id)->orderBy('created_at','desc')->get();
        $nb = Commentaire::where('temoignage_id',$tn->id)->count();
        return view('temoignages.show',[
            "temoignage"=>$tn,
            "commentaires"=>$commentaires,
            "nb_comment"=>$nb
        ]);
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
