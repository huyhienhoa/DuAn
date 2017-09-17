<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Order extends Model
{
    public $table = 'product_orders';
    public function product(){
        return $this->belongsTo('App\Product');
    }

    public function order(){
        return $this->belongsTo('App\Order');
    }
}
