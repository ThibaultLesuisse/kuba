<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aankoop extends Model
{
  protected $table = 'aankoops';
  protected $fillable = array('voornaam', 'achternaam', 'lid', 'rnummer', 'prijs', 'aantal');
  protected $guarded = array('id', 'created_at', 'updated_at');

}
