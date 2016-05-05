<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent;

class Cart extends Model
{
    protected $table = 'carts';
    
    public function prints(){
    	return $this->belongsTo('App\Prints', 'print_id');
    }

    public function print_sizes(){
    	return $this->belongsTo('App\PrintSizes', 'size_id');
    }

    public function frame_sizes(){
    	return $this->belongsTo('App\Frames', 'frame_id');
    }


}
