<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrintSizes extends Model
{
    protected $table = 'print_sizes';

    public function cart(){
        return $this->hasMany('App\Cart');
    }
}
