<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
  protected $table = 'coupons';
  protected $fillable = array('couponcode');
  protected $guarded = array('id', 'created_at', 'updated_at');

}
