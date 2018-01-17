<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Shipping;
use App\SaleDetail;

class Medicine extends Model
{
    //All belongsTo Relation Table
    public function sub_category()
    {
        return $this->belongsTo(SubCategory::class);
    }
    public function power()
    {
        return $this->belongsTo(Power::class);
    }
    public function generic()
    {
        return $this->belongsTo(Generic::class);
    }
    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    //All hasMany Relation Table
    // public function watch_list()
    // {
    //     return $this->hasMany(WatchList::class);
    // }
    // public function rating()
    // {
    //     return $this->hasMany(Rating::class);
    // }
    // public function review()
    // {
    //     return $this->hasMany(Review::class);
    // }
    public function remedies()
    {
        return $this->belongsToMany(Disease::class, 'remedies');
    }
    // public function sale_detail()
    // {
    //     return $this->hasMany(SaleDetail::class);
    // }

    //All belongsToMany Relation Table
    public function watch_lists()
    {
       return $this->belongsToMany(User::class, 'watch_lists');
    }
    // public function ratings()
    // {
    //     return $this->belongsToMany(User::class, 'ratings');
    // }
    public function sale_details()
   {
       return $this->hasManyThrough(SaleDetail::class, Shipping::class);
   }

   //polymarphic Relation Table
   public function comments()
   {
       return $this->morphMany(Comment::class, 'commentable');
   }
   public function ratings()
   {
      return $this->morphMany(Rating::class, 'rateable');
   }
}
