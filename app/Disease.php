<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    public function medicines()
    {
        return $this->belongsToMany(Medicine::class, 'remedies');
    }
}
