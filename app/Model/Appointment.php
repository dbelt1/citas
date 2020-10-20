<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['state','value'];
    public function services(){
        return $this->belongsToMany('App\Model\Service');
    }
}
