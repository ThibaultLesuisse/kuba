<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Request;
use Mail;
use App\Aankoop;
use App\Coupon;
use App\Lid;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function getAankoop(){
      return view('aankoop');
    }
    public function getLijst(){
      $aankopen = Aankoop::all();
      return view('lijst', compact('aankopen'));
    }
    public function handleAankoop(Request $request){
      $input = $request::all();
      $prijs = 0;
      if($input['gridRadios'] == "lid"){
        $prijs = 23.00;
      }
      else {
          $prijs = 35.00;
      }
      $aankoop = Aankoop::create(array(
        'voornaam' =>  $input['voornaam'],
        'achternaam' => $input['achternaam'],
        'prijs' => $prijs,
        'rnummer' => $input['rnummer'],
        'lid' => $input['gridRadios'],
      ));
      $aankoop->save();

      return view('bevestiging', compact('aankoop'));

    }
    public function getBevestig(){


    }
    public function getledenlijst(){
      $leden = Lid::all();
      return view('ledenlijst', compact('leden'));
    }
    public function getLidToevoegen(){

      return view('lidToevoegen');
    }
    public function handleLidToevoegen(Request $request){
      $input = $request::all();
      $lid = Lid::create(array(
        'voornaam' =>  $input['voornaam'],
        'achternaam' => $input['achternaam'],
        'gsmnummer' => $input['gsmnummer'],
        'email' => $input['email'],
        'geregistreerddoor' => Auth::user()->name,
      ));
    $coupon= Coupon::create(array(
        'couponcode' =>  substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(15/strlen($x)) )),1,15),
        'leden_id' => $lid->id,
      ));
      $lid->save();
      $coupon->save();
      Mail::send('emails.coupon', ['coupon' => $coupon],  function ($m) use ($lid) {
           $m->from('noreply@kuba-codexen.tk', 'kuba-codexen');

           $m->to($lid->email, $lid->voornaam)->subject('Je couponcode!');
       });
      return view('bevestigingLid', compact('lid'));


}



}
