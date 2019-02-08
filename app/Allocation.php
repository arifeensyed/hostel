<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Allocation extends Model
{
    public function person(){
        $this->belongsTo('App\Person','person_id', 'id');
    }
    public function room(){
        $this->belongsTo('App\Room','room_id','id');
    }
}
