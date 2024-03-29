<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use OrderSystem\Customer;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $customer = new Customer;
      $customer->name = "John Doe";
      $customer->address ='56 James Street, Brisbane, 4000';
      $customer->phoneMob ='0495465134';
      $customer->cardNo = 1234567890123456;
      $customer->cardExpiry = '2017-12';
      $customer->cardHolder = 'John Be Doe';
      $customer->cardCcv = 123;
      $customer->save();

      $customer = new Customer;
      $customer->name = "Alison Bass";
      $customer->phoneMob ='0468795345';
      $customer->address ='57 Wright Street, Cooroy Moutain, 4563';
      $customer->cardNo = 1234567890123456;
      $customer->cardExpiry = '2017-09';
      $customer->cardHolder = 'Alison Ann Bass';
      $customer->cardCcv = 321;
      $customer->save();

    }
}
