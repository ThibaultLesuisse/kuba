<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLedenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leden', function (Blueprint $table) {
          $table->increments('id');
          $table->string('voornaam');
          $table->string('achternaam');
          $table->bigInteger('gsmnummer');
          $table->string('email');
          $table->string('geregistreerddoor');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::drop('leden');
    }
}
