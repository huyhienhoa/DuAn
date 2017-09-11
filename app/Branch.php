<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    public function products(){
        return $this->hasMany('App\Product');
    }
}
