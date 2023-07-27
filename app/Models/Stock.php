<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = [
        'name','item_id', 'user_id'
    ];
    public function items()
    {
        return $this->hasMany(Items::class);
    }
}
