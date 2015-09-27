<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_items', function(Blueprint $table){
          $table->increments('id')->unique();
          $table->string('item');
          //price is name, 7 is numebr of digits, 2 is numebr after decimal
          //e.g Format is 1000000.12
          $table->double('price', 7,2);
          //adds 2 colums, created_at and updated_at
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
        Schema::drop('menu_items');
    }
}
