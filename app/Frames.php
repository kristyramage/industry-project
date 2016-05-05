<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Frames extends Model
{
    protected $table = 'frame_sizes';

    public function cart(){
        return $this->hasMany('App\Cart');
    }
 
}
