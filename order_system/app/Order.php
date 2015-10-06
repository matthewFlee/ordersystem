<?php

namespace OrderSystem;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = false;
    
    public function customers()
    {
        return $this->belongsTo('Customer');
    }
   
}