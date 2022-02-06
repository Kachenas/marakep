<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['customer_id','order_reference','order_price','order_quantity','order_date','status','remarks'];
}
