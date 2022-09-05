<?php

namespace App\Http\Controllers;
use App\Models\Enquiry;
use Illuminate\Http\Request;

class ContactController extends Controller
{
   public function store(Request $request){
$contact= new Enquiry;
$contact->Name=$request->name;
$contact->email=$request->email;
$contact->contact=$request->phone;
$contact->address=$request->address;
$contact->save();
return redirect()->route('home')->with('success','Your Message reached Us');
   }
}
