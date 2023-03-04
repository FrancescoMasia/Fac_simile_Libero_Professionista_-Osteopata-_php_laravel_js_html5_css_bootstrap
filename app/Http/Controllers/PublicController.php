<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function homepage() {
        return view('welcome');
}
    public function contact_us(){
        return view('contact_us');
    }
    public function contact_us_submit(Request $request){
    
        $name= $request->input('name');
        $email= $request->input('email');
        $message= $request->input('message');

        $user_date = compact('name', 'email', 'message');
        Mail::to($email)->send(new ContactMail($user_date));
        
        // per reinderizzare
        return redirect(route('homepage'))->with('status','email inviata'); 
    }
    public function chi_siamo(){
        return view('about_us');
    }
}