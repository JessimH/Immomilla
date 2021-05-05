<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
// use App\Mail\ContactMe;
use App\Mail\ContactMe;

class ContactController extends Controller
{
    //
    public function index()
    {
        return view('contact');
    }

    public function store()
    {
        //send email
        request()->validate(['email' => 'required|email']);
        $mail = request();
        // dd($mail);
        $toEmail = 'immomilla@immomilla.com';

        Mail::to($toEmail)
                    ->send(new ContactMe($mail));

        return redirect('/contact')
                ->with('success','Votre mail à bien été envoyé !');
    }

}
