<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\Request;


class Product extends Model
{
    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function branch(){
        return $this->belongsTo('App\Branch');
    }

    public function images(){
        return $this->hasMany('App\Image');
    }
}
