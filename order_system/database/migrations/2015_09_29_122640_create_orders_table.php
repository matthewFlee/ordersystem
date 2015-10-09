<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
         Schema::create('orders', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('c_id');
            $table->foreign('c_id')->references('id')->on('customers');
            $table->string('type');
            // order_items is serialised from array of ojects of items
            $table->string('order_items');
            $table->string('status');
            // $table->double('total_price');
            //$table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }
}
