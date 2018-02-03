<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class EmailConfirm extends Model
{
    protected $fillable = ['user_id', 'token'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
