<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function sub_category()
    {
        return $this->hasMany(SubCategory::class);
    }
    public function medicines()
   {
       return $this->hasManyThrough(Medicine::class, SubCategory::class);
   }
}
