<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Service;
class ServiceController extends Controller
{
    public function index(){
        $services = Service::with([
            'citas' => function($query){
                $query->select('state','value');
            }
        ])->
        get();

           
        return $services;
    }
  
}
