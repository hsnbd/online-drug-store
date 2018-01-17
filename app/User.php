<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //All hasMany Relation Table
    public function watch_lists()
    {
       return $this->belongsToMany(Medicine::class, 'watch_lists');
    }
    // public function ratings()
    // {
    //     return $this->belongsToMany(Medicine::class, 'ratings');
    // }
    public function shippings()
    {
        return $this->hasMany(Shipping::class);
    }
    public function sale_details()
    {
        return $this->hasManyThrough(SaleDetail::class, Shipping::class);
    }




    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function ratings()
    {
       return $this->hasMany(Rating::class);
    }
}
