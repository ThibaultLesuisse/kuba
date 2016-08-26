<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('coupons', function (Blueprint $table) {
           $table->increments('id');
           $table->string('couponcode')->unique();
           $table->integer('leden_id')->unsigned();
           $table->foreign('leden_id')->references('id')->on('leden');
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
         Schema::drop('coupons');
     }
}
