<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent;

class Frames extends Model
{
    protected $table = 'frame_sizes';

    public function cart(){
        return $this->hasMany('App\Cart');
    }
 
}
