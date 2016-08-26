<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
  protected $table = 'coupons';
  protected $fillable = array('couponcode', 'leden_id');
  protected $guarded = array('id', 'created_at', 'updated_at');

  public function lid()
    {
        return $this->belongsTo('App\Lid', 'leden_id');
    }
}
