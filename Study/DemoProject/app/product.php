<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public function catelogy(){
    	return $this->belongsTo('App\catelogy','id_catelogy');
    }
}
