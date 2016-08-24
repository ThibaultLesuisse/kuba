<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Request;
use App\Aankoop;

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
      if($input['voornaam'] == "lid"){
        $prijs = 23.00;
      }
      else {
          $prijs = 35.00;
      }
      Aankoop::create(array(
        'voornaam' =>  $input['voornaam'],
        'achternaam' => $input['achternaam'],
        'prijs' => $prijs,
        'rnummer' => $input['rnummer'],
        'lid' => $input['gridRadios'],

      ));
      return $input['achternaam'];

    }
}
