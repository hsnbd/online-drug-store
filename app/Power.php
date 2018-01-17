<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Power extends Model
{
    public function medicines()
    {
        return $this->hasMany(Medicine::class);
    }
}
