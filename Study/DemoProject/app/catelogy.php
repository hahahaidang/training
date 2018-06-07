<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class catelogy extends Model
{
    public function product(){
    	return $this->hasMany('App\product');
    }
}
