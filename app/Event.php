<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //

    public function event_images(){
    	return $this->hasMany('App\Eventimage');
    }
}
