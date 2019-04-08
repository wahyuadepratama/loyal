<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Driver extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    use SoftDeletes;

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
