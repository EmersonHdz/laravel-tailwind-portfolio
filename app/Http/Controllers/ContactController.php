<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{  
    public function index(){
        return view('components.home.contact');
    }

    public function store(Request $request)
    {

        $contacto = new ContactMail($request->all());
    
        Mail::to('laravel@gmail.com')->send($contacto);

        return redirect('/#contact')->with('status', 'Your message has been sent successfully!');
    }
    
}
