<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function medicine()
    {
        return $this->hasMany(Medicine::class);
    }
}
