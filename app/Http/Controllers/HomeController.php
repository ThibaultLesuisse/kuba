<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Request;
use Mail;
use App\Aankoop;
use App\Coupon;
use App\Lid;
use Auth;
use DB;
use Mollie;

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
        $aantalCodexen = Aankoop::all()->count();
        $aantalLeden = Lid::all()->count();
        $prijstotaal = Aankoop::all()->sum('prijs');
        $bestelid =  DB::table('leden')
                     ->select(DB::raw('voornaam, achternaam, geregistreerddoor, count(geregistreerddoor) as aantal'))
                     ->groupBy('geregistreerddoor')
                     ->orderBy('aantal', 'desc')
                     ->first();
        $besteliddata = (string)$bestelid->geregistreerddoor;
        $data = array(
          'aantalcodexen' => $aantalCodexen,
          'aatalleden' => $aantalLeden,
          'prijstotaal' => $prijstotaal,
          'bestelid' => $besteliddata ,
      );
        return view('home', ['data' => $data]);
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

      $payment = Mollie::api()->payments()->create([
        "amount"      => $prijs,
        "description" => "Aankoop van een vrg codex",
        "redirectUrl" => "http://kuba-codexen.tk/bevestig",
        "webhookUrl"   => "http://kuba-codexen.tk/api/aankoopwebhook",
]);
      $payment = Mollie::api()->payments()->get($payment->id);
      $aankoop = Aankoop::create(array(
        'voornaam' =>  $input['voornaam'],
        'achternaam' => $input['achternaam'],
        'prijs' => $prijs,
        'rnummer' => $input['rnummer'],
        'lid' => $input['gridRadios'],
        'order_id' => $payment->id,
      ));
      $aankoop->save();
      $url = $payment->getPaymentUrl();
      return redirect($url);

    }
    public function getBevestig(){
      return view('bevestiging');

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
