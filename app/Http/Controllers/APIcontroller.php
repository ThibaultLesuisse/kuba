<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coupon;
use App\Http\Requests;

class APIcontroller extends Controller
{
    //
    public function gethook(){
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
