<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Enterprise extends Model
{
    protected $fillable = ['name'];
    public function services(){
        return $this->hasMany('App\Model\Service');
    }
}
