<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [

        'name',
        'header',
        'user_id',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
