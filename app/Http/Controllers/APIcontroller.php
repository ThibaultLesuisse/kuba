<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class APIcontroller extends Controller
{
    //
    public function gethook(){
      return  response()->json([succes], 200);
    }
}
