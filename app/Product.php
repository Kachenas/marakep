<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['supplier_id','product_name','product_price','quantity','product_status'];
}
