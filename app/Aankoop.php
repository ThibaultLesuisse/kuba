<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aankoop extends Model
{
  protected $table = 'aankoops';
  protected $fillable = array('voornaam', 'achternaam', 'email' , 'lid', 'rnummer', 'prijs', 'aantal', 'order_id');
  protected $guarded = array('id', 'created_at', 'updated_at');

}
