<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prints extends Model
{
    protected $table = 'prints';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'price', 'description','poster', 'size', 'quantity',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}
