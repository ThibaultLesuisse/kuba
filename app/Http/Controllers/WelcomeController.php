<?php

namespace App\Http\Controllers;

use Request;
use Mail;
use App\Http\Requests;

class WelcomeController extends Controller
{
    public function getWelcome(){
      return view('welcome');
    }
    public function handleContactForm(Request $request){
      $input = $request::all();
      $data=array(
        'naam' => $input['naam'],
        'email' => $input['email'],
        'bericht' => $input['bericht'],
       );
        Mail::send('emails.contact', ['data' => $data],  function ($m) {
             $m->from('noreply@kuba-codexen.tk', 'kuba-codexen');
             $m->to('lesuisse.thibault@gmail.com')->subject('Contactformulier via kuba-codexen!');
         });

    }
}
