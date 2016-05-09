<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent;

class Order extends Model
{
    protected $table = 'orders';
    
    public function cart(){
    	return $this->belongsTo('App\Cart', 'cart_id');
    }

    public function shipping(){
    	return $this->belongsTo('App\Shipping', 'shipping_id');
    }


}
