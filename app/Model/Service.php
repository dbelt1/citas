<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['name','enterprise_id'];
    public function empresa(){
        return $this->belongsTo('App\Model\Enterprise');
    }
    public function citas(){
        return $this->belongsToMany('App\Model\Appointment');
    }
}
