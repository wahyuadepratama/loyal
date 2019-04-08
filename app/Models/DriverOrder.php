<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DriverOrder extends Model
{
  protected $table = 'driver_order';
  protected $guarded = [];
  public $timestamps = false;

  public function order(){
    return $this->belongsTo('App\Models\Order','id_order');
  }

  public function driver(){
    return $this->belongsTo('App\Models\Driver','id_driver');
  }
}
