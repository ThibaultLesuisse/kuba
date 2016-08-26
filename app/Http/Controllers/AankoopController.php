<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AankoopController extends Controller
{
    //


    public function getAankoop(){
      return view('aankoopCodex');
    }
}
