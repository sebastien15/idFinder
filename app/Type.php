<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{

    public function cards()
    {
        return $this->hasMany('App\Card');
    }
 
}
