<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table){
          $table->increments('id')->unique();
          $table->string('name');
          $table->string('phoneMob');
          $table->string('address');
          $table->integer('cardNo');
          $table->date('cardExpiry');
          $table->string('cardHolder');
          $table->integer('cardCcv');
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
        Schema::drop('customers');
    }
}
