<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent;

class Prints extends Model
{
    protected $table = 'prints';

    public function cart(){
        return $this->hasMany('App\Cart');
    }
}
