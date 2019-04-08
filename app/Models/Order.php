<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    public function package(){
      return $this->belongsTo('App\Models\Package','id_package');
    }

    public function driverOrder(){
      return $this->hasMany('App\Models\DriverOrder');
    }

    public function getUpdatedAtAttribute(){
      return \Carbon\Carbon::parse($this->attributes['updated_at'])->diffForHumans();
    }

    public function getCreatedAtAttribute(){
      return \Carbon\Carbon::parse($this->attributes['created_at'])->format('l, d F Y');
    }
}
