<?php

namespace OrderSystem\Providers;

use Illuminate\Support\ServiceProvider;
use OrderSystem\Order;
use OrderSystem\Customer;
use DB, Schema;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      if(Schema::hasTable('orders') && Schema::hasTable('orders')){
        $sOrders = DB::table('orders')
        ->join('customers', 'orders.c_id', '=', 'customers.id')
        ->select('orders.*', 'customers.name')
        ->get();
        view()->share('sOrders', $sOrders);
      }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
