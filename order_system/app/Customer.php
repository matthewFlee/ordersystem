<?php

namespace OrderSystem;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
        public function orders()
    {
        return $this->hasMany('Order');
    }
}
