<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    protected $table = 'shipping';
    
    public function order(){
        return $this->hasMany('App\Order');
    }
 
}
