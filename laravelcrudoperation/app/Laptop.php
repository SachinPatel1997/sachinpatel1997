<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    //
     protected  $fillable = [
        'name' , 'email' , 'phone',
    ];
public $timestamps = false;
}
