<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class contactController extends Controller
{
    public function create()
    {
        return view('contacts.create');
    
    }
    public function store(Request $request)
    {
        $contact = new Contact;
        $contact->email = $request->email;
        $contact->sujet = $request->sujet;
        $contact->message = $request->message;
        $contact->save();
    }
}
