<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eventimage extends Model
{
    //
    public function event(){
    	return $this->belongsTo('App\Event');
    }
}
