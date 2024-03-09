<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacy;

class ContactController extends Controller
{
    public function index(Request $req){
        $contact = Contacy::all();
        return view('Welcome')->with("contact",$contact);
    }  
    
    public function add(Request $req){
    
        $contact = new Contacy;
        $contact->name = $req->name;
        $contact->phone = $req->phone;
        $contact->email = $req->email;
        
        $contact->save();
        return redirect()->back();
       

    }
    public function delete(Request $req){
        $contact = Contacy::find($req->id);
        $contact->delete();
        return redirect()->back();
    }
    public function edit($id){
        $contact = Contacy::find($id);
        return view('edit')->with("contact", $contact);
    }
    
    
    public function update(Request $req){
        $req->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
        ]);
        $contact = Contacy::find($req->id);
        $contact->update([
            'name' => $req->name,
            'phone' => $req->phone,
            'email' => $req->email,
        ]);
        return redirect()->back();
    }


    //update the contact/contacy :-) model
}
