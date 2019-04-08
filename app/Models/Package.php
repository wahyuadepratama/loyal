<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
  protected $guarded = [];

  public function order(){
    return $this->hasMany('App\Models\Order');
  }
    
}
