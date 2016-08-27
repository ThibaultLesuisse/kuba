<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Request;
use Mollie;
use App\Aankoop;
use App\Http\Requests;
use Session;
use Mail;

class AankoopController extends Controller
{
    //


    public function getAankoop(){
      return view('aankoopCodex');
    }
    public function handleAankoop(Request $request){
      $input = $request::all();
      $prijs = $input['prijs'];
      if($prijs == 25.00 || $prijs ==35.00){
        $payment = Mollie::api()->payments()->create([
          "amount"      => $prijs,
          "description" => "Aankoop van een vrg codex",
          "redirectUrl" => "http://kuba-codexen.tk/bevestigingAankoopCodex",
          "webhookUrl"   => "http://kuba-codexen.tk/api/aankoopwebhook",
  ]);
        $payment = Mollie::api()->payments()->get($payment->id);
        $aankoop = Aankoop::create(array(
          'voornaam' =>  $input['voornaam'],
          'achternaam' => $input['achternaam'],
          'email' => $input['email'],
          'prijs' => $prijs,
          'rnummer' => $input['rnummer'],
          'order_id' => $payment->id,
        ));
        $aankoop->save();
        Session::put('aankoop', $aankoop);
        Session::put('order', 'payment');
        $url = $payment->getPaymentUrl();

        return redirect($url);
      }
      else {
       return view('aankoopCodex');
      }



    }
    public function succesAankoop(){
      $payment = Mollie::api()->payments()->get(Session::get('order')->id);
      if ($payment->isPaid())
        {
          Mail::send('emails.succes', ['aankoop' => $aankoop],  function ($m) use ($aankoop){
               $m->from('noreply@kuba-codexen.tk', 'kuba-codexen');
               $m->to($aankoop->email)->subject('Bevestiging Codex');
           });
        }

      $aankoop = Session::get('aankoop');
      return view('bevestigingAankoopCodex', ['aankoop' => $aankoop]);
    }
}
