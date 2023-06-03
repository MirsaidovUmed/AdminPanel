<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employ extends Model
{
    protected $fillable = [
        'name','phone', 'address' , 'password',
    ];
}
