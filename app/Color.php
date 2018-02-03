<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    public function medicines()
    {
        return $this->hasMany('App\Medicine');
    }
}
