<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coupon;
use App\Aankoop;
use App\Http\Requests;
use Session;
use Mail;
use Mollie;

class APIcontroller extends Controller
{
    //
    public function gethook(Request $request){
        $id = $request->id;
        $aankoop = Aankoop::where('order_id', $id);
        $payment = Mollie::api()->payments()->get($id);
        if ($payment->isPaid())
        {
            Mail::send('emails.succes', ['aankoop' => $aankoop],  function ($m) use ($aankoop){
                $m->from('noreply@kuba-codexen.tk', 'kuba-codexen');
                $m->to($aankoop->email)->subject('Bevestiging Codex');
            });
            }
        }
      return  response()->json(['succes'], 200);
    }
    public function checkCoupon(Request $request){
      $couponmeegegeven = $request->coupon;
      $coupon = Coupon::where('couponcode', $couponmeegegeven)->first();
      if ($coupon === null) {
        return response()->json(['error'], 403);
    }
    else {
      return response()->json(['succes'], 200);
    }

    }
}
