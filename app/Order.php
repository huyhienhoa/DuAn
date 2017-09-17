<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function products(){
        return $this->belongsToMany('App\Product','product_orders','order_id','product_id');
    }
    
    public function product_order(){
        return $this->hasMany('App\Product_Order');
    }
}
