<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $guarded=[];
    public function allocation(){
        return $this->hasOne('App\Allocation');
    }
    public function room(){
        return $this->belongsTo('App\Room');
    }
}
