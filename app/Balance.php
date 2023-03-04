<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    protected $fillable = [
      'balance'
    ];



    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
