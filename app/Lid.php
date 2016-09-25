<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lid extends Model
{
  protected $table = 'leden';
  protected $fillable = array('voornaam', 'achternaam', 'gsmnummer', 'email', 'geregistreerddoor', 'betaald');
  protected $guarded = array('id', 'created_at', 'updated_at');

  public function coupon()
     {
         return $this->hasOne('App\Coupon');
     }



}
