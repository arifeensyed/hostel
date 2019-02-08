<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public function allocation(){
        $this->hasOne('App\Allocation');
    }
}
