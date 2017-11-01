<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['email', 'product'];
 
    public function user()
    {
        return $this->hasOne('App\User');
    }
 
    public function product()
    {
        return $this->hasOne('App\Product');
    }
}
